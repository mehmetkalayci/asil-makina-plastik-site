<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Configs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class PlastikController extends Controller
{
    public function anasayfa() {

        /*
         * Anasayfa
         * Slides gösterilecek
         * 4 adet ürün gösterilecek
         * Hakkımızda yazısı gösterilecek
         */
        $slides = DB::table('slides')->where('site', 'Plastik')->where('language', app()->getLocale())->orderBy('id', 'desc')->get();
        $products = DB::table('products')->where('site', 'Plastik')->where('language', app()->getLocale())->orderBy('id', 'desc')->take(4)->get();
        $about = DB::table('abouts')->where('site', 'Plastik')->where('language', app()->getLocale())->first();


        $temp = DB::table('abouts')->where('site', 'Plastik')->where('language', app()->getLocale())->first();
        $footer_about = $temp->about_footer;
        $temp = DB::table('products')->where('site', 'Plastik')->where('language', app()->getLocale())->orderBy('id', 'desc')->take(4)->get();
        $footer_products = $temp;

        return view('front.plastik.anasayfa', ['slides' => $slides, 'products' => $products, 'about' => $about, 'footer_products' => $footer_products, 'footer_about' => $footer_about]);
    }

    public function hakkimizda()
    {
        /*
         * Hakkımızda
         * Hakkımızda yazısı ve resmini göster
         * Referansları göster
         */
        $about = DB::table('abouts')->where('site', 'Plastik')->where('language', app()->getLocale())->first();


        $temp = DB::table('abouts')->where('site', 'Plastik')->where('language', app()->getLocale())->first();
        $footer_about = $temp->about_footer;
        $temp = DB::table('products')->where('site', 'Plastik')->where('language', app()->getLocale())->orderBy('id', 'desc')->take(4)->get();
        $footer_products = $temp;

        return view('front.plastik.hakkimizda', ['about' => $about, 'footer_products' => $footer_products, 'footer_about' => $footer_about]);
    }

    public function urunler($slug = null)
    {
        /*
         * Ürünler
         * Slug varsa ürün detay gösterilecek - Random diper ürünler gösterilecek
         * Slug yoksa makine için ürünler gösterilecek
         */

        $temp = DB::table('abouts')->where('site', 'Plastik')->where('language', app()->getLocale())->first();
        $footer_about = $temp->about_footer;
        $temp = DB::table('products')->where('site', 'Plastik')->where('language', app()->getLocale())->orderBy('id', 'desc')->take(4)->get();
        $footer_products = $temp;


        if ($slug === null) {
            $products = DB::table('products')->where('site', 'Plastik')->where('language', app()->getLocale())->orderBy('id', 'desc')->paginate(12);
            return view('front.plastik.urunler', ['products' => $products, 'footer_products' => $footer_products, 'footer_about' => $footer_about]);
        } else {
            $product = DB::table('products')->where('slug', $slug)->first();
            if ($product === null) {
                abort(404);
            }

            return view('front.plastik.urundetay', ['product' => $product, 'footer_products' => $footer_products, 'footer_about' => $footer_about]);
        }
    }

    public function blog($slug = null)
    {
        /*
         * Blog
         */
        $temp = DB::table('abouts')->where('site', 'Plastik')->where('language', app()->getLocale())->first();
        $footer_about = $temp->about_footer;
        $temp = DB::table('products')->where('site', 'Plastik')->where('language', app()->getLocale())->orderBy('id', 'desc')->take(4)->get();
        $footer_products = $temp;


        if ($slug === null) {
            $posts = DB::table('blogs')->where('site', 'Plastik')->where('language', app()->getLocale())->orderBy('id', 'desc')->paginate(12);
            return view('front.plastik.blog', ['posts' => $posts, 'footer_products' => $footer_products, 'footer_about' => $footer_about]);
        } else {
            $post = DB::table('blogs')->where('slug', $slug)->first();
            if ($post === null) {
                abort(404);
            }
            return view('front.plastik.blogdetay', ['post' => $post, 'footer_products' => $footer_products, 'footer_about' => $footer_about]);
        }
    }

    public function iletisim()
    {
        /*
         * İletişim
         * İletişim formunu göster
         */

        $temp = DB::table('abouts')->where('site', 'Plastik')->where('language', app()->getLocale())->first();
        $footer_about = $temp->about_footer;
        $temp = DB::table('products')->where('site', 'Plastik')->where('language', app()->getLocale())->orderBy('id', 'desc')->take(4)->get();
        $footer_products = $temp;


        return view('front.plastik.iletisim', ['footer_products' => $footer_products, 'footer_about' => $footer_about]);
    }

    public function gonder(Request $request)
    {
        $data = $request->validate([
            'adsoyad' => 'required|max:255',
            'eposta' => 'required|max:255',
            'telefon' => 'required|max:255',
            'konu' => 'required|max:255',
            'mesaj' => 'required|max:1024',
            'captcha' => 'required|captcha'
        ]);

        $send_to = Configs::first()->email1;
        if($send_to) {
            Mail::to($send_to)->send(new ContactMail($data));
            return redirect()->back()->with('success', 'Mesajınız iletildi, teşekkür ederiz.');
        } else {
            return redirect()->back()->with('success', 'Malesef mesajınız iletilemedi! Websitesi iletişim ayarları hatalı.');
        }
    }
}
