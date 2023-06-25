<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubscribeController extends Controller
{
    public function list()
    {
        $subscriptions = Subscription::all();
        return view('back.subscription.list', ['subscriptions' => $subscriptions]);
    }

    public function subscribe(Request $request)
    {
        $data = $request->validate([
            'modal-eposta' => 'required|max:255',
            'modal-captcha' => 'required|captcha'
        ]);

        $subscription = new Subscription();
        $subscription->email = $data['modal-eposta'];

        if ($subscription->save()) {
            return redirect()->back()->with('success', __( 'Eposta listemize kaydınız alınmıştır, teşekkür ederiz.'));
        } else{
            return redirect()->back()->with('error', __( 'Kayıt sırasında hata oluştu!'));
        }
    }

    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        return redirect()->route('admin.subscription.list')->with('success', 'Eposta silindi.');
    }
}
