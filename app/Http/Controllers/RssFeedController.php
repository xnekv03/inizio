<?php

namespace App\Http\Controllers;

use App\Models\Address;

class RssFeedController extends Controller
{
    public function feed()
    {
        $addresses = Address::orderBy('created_at', 'desc')->limit(50)->get();
        return response()->view('rss.feed', compact('addresses'))->header('Content-Type', 'application/xml');
    }

    public function detail(Address $address)
    {
        return view('address')->with(['address'=>$address]);
    }
}
