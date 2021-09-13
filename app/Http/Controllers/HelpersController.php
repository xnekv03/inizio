<?php

namespace App\Http\Controllers;

use App\Models\Ares;

class HelpersController extends Controller
{
    public function create()
    {
        if (Ares::count() > 10000) {
            return redirect(route('created.desc'))->withErrors('Příliš mnoho záznamů, promažte');
        }

        Ares::factory()->count(100)->create();

        return redirect(route('created.desc'));
    }

    public function truncate()
    {
        Ares::truncate();

        return redirect(route('created.desc'));
    }
}
