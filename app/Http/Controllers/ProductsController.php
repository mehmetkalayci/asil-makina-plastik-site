<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function show(Products $product)
    {
        return view('back.product.show', compact('product'));
    }

    public function index()
    {
        $products = Products::all();
        return view('back.product.index', ['products' => $products]);
    }

    public function create()
    {
        return view('back.product.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'nullable|max:255',
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image',
            'site' => 'required|in:Makine,Plastik',
            'language' => 'required|min:1',
        ]);

        $name = $validatedData['name'];
        $slug = Str::slug($name);

        // Check if the generated slug is unique, if not, append a number to make it unique
        $count = 1;
        while (Products::where('slug', $slug)->exists()) {
            $slug = Str::slug($name) . '-' . $count;
            $count++;
        }

        // Upload the file
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();


        foreach ($validatedData['language'] as $lang) {
            // Generate a unique identifier
            $uid = uniqid();
            // Generate the new file name with datetime and UID
            $fileName = date('Ymd_His') . '_' . $uid . '.' . $extension;
            // Store the file with the new name
            $imagePath = $image->storeAs('uploads', $fileName);


            // Create the product
            $product = new Products();
            $product->code = $validatedData['code'];
            $product->name = $validatedData['name'];
            $product->description = $validatedData['description'];
            $product->slug = $slug . '-' . $lang;
            $product->image = $imagePath;
            $product->site = $validatedData['site'];
            $product->language = $lang;

            $product->save();
        }

        // Rest of your logic

        return redirect()->route('admin.products.index')->with('success', 'Ürün eklendi.');
    }


    public function edit(Products $product)
    {
        return view('back.product.edit', compact('product'));
    }

    public function update(Request $request, Products $product)
    {
        $data = $request->validate([
            'code' => 'nullable|max:255',
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'image',
            'site' => 'required|in:Makine,Plastik',
            'language' => 'required',
        ]);


        $name = $data['name'];
        $slug = Str::slug($name);

        // Append a number to the slug to make it unique
        $originalSlug = $slug;
        $counter = 1;

        while (Products::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $product->slug = $slug;
        $product->description = $data['description'];
        $product->code = $data['code'];
        $product->name = $data['name'];
        $product->site = $data['site'];
        $product->language = $data['language'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            // Generate a unique identifier
            $uid = uniqid();
            // Generate the new file name with datetime and UID
            $fileName = date('Ymd_His') . '_' . $uid . '.' . $extension;
            // Store the file with the new name
            $imagePath = $image->storeAs('uploads', $fileName);

            if (Storage::exists($product->image)) {
                Storage::delete($product->image);
            }
            $product->image = $imagePath;
        }

        $product->update();

        return redirect()->route('admin.products.index')->with('success', 'Ürün başarıyla güncellendi.');
    }

    public function destroy(Products $product)
    {
        if (Storage::exists($product->image)) {
            Storage::delete($product->image);
        }
        $product->delete();

        // İşlemler tamamlandıktan sonra yönlendirme yapabilirsiniz
        return redirect()->route('admin.products.index')->with('success', 'Ürün başarıyla silindi.');
    }
}
