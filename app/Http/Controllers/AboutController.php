<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfigRequest;
use App\Models\About;
use App\Models\Blog;
use App\Models\Configs;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function show(About $about)
    {
        return view('back.about.show', compact('about'));
    }

    public function index()
    {
        $abouts = About::all();
        return view('back.about.list', ['abouts' => $abouts]);
    }

    public function create()
    {
        return view('back.about.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:512',
            'about' => 'required',
            'about_footer' => 'required|max:512',
            'mission' => 'required',
            'vision' => 'required',
            'values' => 'required',
            'promotional_film' => 'required',
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
            $about = new About();
            $about->title = $validatedData['title'];
            $about->about = $validatedData['about'];
            $about->about_footer = $validatedData['about_footer'];
            $about->mission = $validatedData['mission'];
            $about->vision = $validatedData['vision'];
            $about->values = $validatedData['values'];
            $about->promotional_film = $validatedData['promotional_film'];
            $about->image = $imagePath;
            $about->site = $validatedData['site'];;
            $about->language = $lang;

            $about->save();
        }

        // Rest of your logic
        return redirect()->route('admin.about.index')->with('success', 'Hakkımızda yazısı eklendi.');
    }



    public function edit(About $about)
    {
        return view('back.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $data = $request->validate([
            'title' => 'nullable|max:512',
            'about' => 'required',
            'about_footer' => 'required|max:512',
            'mission' => 'required',
            'vision' => 'required',
            'values' => 'required',
            'promotional_film' => 'required',
            'image' => 'image',
            'site' => 'required|in:Makine,Plastik',
            'language' => 'required|min:1',
        ]);

        $about->title = $data['title'];
        $about->about = $data['about'];
        $about->about_footer = $data['about_footer'];
        $about->mission = $data['mission'];
        $about->vision = $data['vision'];
        $about->values = $data['values'];
        $about->promotional_film = $data['promotional_film'];
        $about->site = $data['site'];
        $about->language = $data['language'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            // Generate a unique identifier
            $uid = uniqid();
            // Generate the new file name with datetime and UID
            $fileName = date('Ymd_His') . '_' . $uid . '.' . $extension;
            // Store the file with the new name
            $imagePath = $image->storeAs('uploads', $fileName);

            if (Storage::exists($about->image)) {
                Storage::delete($about->image);
            }
            $about->image = $imagePath;
        }

        $about->update();

        return redirect()->route('admin.about.index')->with('success', 'Hakkımızda yazısı güncellendi.');
    }

    public function destroy(About $about)
    {
        if (Storage::exists($about->image)) {
            Storage::delete($about->image);
        }
        $about->delete();

        // İşlemler tamamlandıktan sonra yönlendirme yapabilirsiniz
        return redirect()->route('admin.about.index')->with('success', 'Hakkımızda yazısı silindi.');
    }
}
