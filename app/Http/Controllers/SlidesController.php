<?php

namespace App\Http\Controllers;

use App\Models\Slides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SlidesController extends Controller
{
    public function show(Slides $slide)
    {
        return view('back.slider.show', compact('slide'));
    }

    public function index()
    {
        $slides = Slides::all();
        return view('back.slider.index', ['slides' => $slides]);
    }

    public function create()
    {
        return view('back.slider.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|max:255',
            'description' => 'nullable|max:255',
            'image' => 'required|image',
            'site' => 'required|in:Makine,Plastik',
            'language' => 'required|min:1',
        ]);

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
            $slide = new Slides();
            $slide->title = $validatedData['title'];
            $slide->description = $validatedData['description'];
            $slide->image = $imagePath;
            $slide->site = $validatedData['site'];
            $slide->language = $lang;

            $slide->save();
        }

        // Rest of your logic

        return redirect()->route('admin.slides.index')->with('success', 'Slider eklendi.');
    }


    public function edit(Slides $slide)
    {
        return view('back.slider.edit', compact('slide'));
    }

    public function update(Request $request, Slides $slide)
    {
        $data = $request->validate([
            'title' => 'nullable|max:255',
            'description' => 'nullable|max:255',
            'image' => 'image',
            'site' => 'required|in:Makine,Plastik',
            'language' => 'required',
        ]);

        $slide->title = $data['title'];
        $slide->description = $data['description'];
        $slide->site = $data['site'];
        $slide->language = $data['language'];


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            // Generate a unique identifier
            $uid = uniqid();
            // Generate the new file name with datetime and UID
            $fileName = date('Ymd_His') . '_' . $uid . '.' . $extension;
            // Store the file with the new name
            $imagePath = $image->storeAs('uploads', $fileName);

            if ($slide->image && Storage::exists($slide->image)) {
                Storage::delete($slide->image);
            }
            $slide->image = $imagePath;
        }

        $slide->update();

        return redirect()->route('admin.slides.index')->with('success', 'Slider başarıyla güncellendi.');
    }

    public function destroy(Slides $slide)
    {
        if (Storage::exists($slide->image)) {
            Storage::delete($slide->image);
        }
        $slide->delete();

        // İşlemler tamamlandıktan sonra yönlendirme yapabilirsiniz
        return redirect()->route('admin.slides.index')->with('success', 'Slider başarıyla silindi.');
    }
}
