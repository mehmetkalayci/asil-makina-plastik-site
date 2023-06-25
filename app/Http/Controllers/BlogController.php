<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function show(Blog $blog)
    {
        return view('back.blog.show', compact('blog'));
    }

    public function index()
    {
        $blogs = Blog::all();
        return view('back.blog.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        return view('back.blog.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image',
            'site' => 'required|in:Makine,Plastik',
            'language' => 'required|min:1',
        ]);

        $title = $validatedData['title'];
        $slug = Str::slug($title);

        // Check if the generated slug is unique, if not, append a number to make it unique
        $count = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = Str::slug($title) . '-' . $count;
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


            // Create a Blog
            $blog = new Blog();
            $blog->title = $validatedData['title'];
            $blog->content = $validatedData['content'];
            $blog->slug = $slug . '-' . $lang;
            $blog->image = $imagePath;
            $blog->site = $validatedData['site'];
            $blog->language = $lang;

            $blog->save();
        }

        // Rest of your logic

        return redirect()->route('admin.blogs.index')->with('success', 'Blog yazısı eklendi.');
    }


    public function edit(Blog $blog)
    {
        return view('back.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image',
            'site' => 'required|in:Makine,Plastik',
            'language' => 'required',
        ]);


        $title = $data['title'];
        $slug = Str::slug($title);

        // Append a number to the slug to make it unique
        $originalSlug = $slug;
        $counter = 1;

        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $blog->slug = $slug;
        $blog->title = $data['title'];
        $blog->content = $data['content'];
        $blog->site = $data['site'];
        $blog->language = $data['language'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            // Generate a unique identifier
            $uid = uniqid();
            // Generate the new file name with datetime and UID
            $fileName = date('Ymd_His') . '_' . $uid . '.' . $extension;
            // Store the file with the new name
            $imagePath = $image->storeAs('uploads', $fileName);

            if (Storage::exists($blog->image)) {
                Storage::delete($blog->image);
            }
            $blog->image = $imagePath;
        }

        $blog->update();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog yazısı güncellendi.');
    }

    public function destroy(Blog $blog)
    {
        if (Storage::exists($blog->image)) {
            Storage::delete($blog->image);
        }
        $blog->delete();

        // İşlemler tamamlandıktan sonra yönlendirme yapabilirsiniz
        return redirect()->route('admin.blogs.index')->with('success', 'Blog yazısı silindi.');
    }
}
