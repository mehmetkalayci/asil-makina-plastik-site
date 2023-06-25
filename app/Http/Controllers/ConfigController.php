<?php

namespace App\Http\Controllers;

use App\Models\Configs;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ConfigController extends Controller
{
    public function edit()
    {
        $config = Configs::first();
        return view('back.config.edit', ['config' => $config]);
    }

    public function update(Request $request, Configs $configs)
    {
        $configs = Configs::first();
        $configs->update($request->all());

        return redirect()->route('admin.config.edit')->with('success', 'Ayarlar güncellendi.');
    }
}
