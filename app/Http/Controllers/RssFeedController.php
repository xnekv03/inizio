<?php

namespace App\Http\Controllers;

use App\Mail\SendAddressMail;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RssFeedController extends Controller
{
    public function feed()
    {
        $addresses = Address::orderBy('last_update', 'desc')->get();

        return response()->view('rss.feed', compact('addresses'))->header('Content-Type', 'application/xml');
    }

    public function detail(Address $address)
    {
        return view('address')->with(['address'=>$address]);
    }

    public function sendAddress(Request $request)
    {
        $validated = $request->validate([
            'mail' => 'required|email',
            'id'   => 'required|exists:addresses,id',
        ]);

        Mail::to($validated['mail'])->send(new SendAddressMail(Address::find($validated['id'])));

        $request->session()->flash('alert-success', 'E-mail odeslán');

        return redirect(route('created.desc'));
    }
}
