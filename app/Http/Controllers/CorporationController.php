<?php

namespace App\Http\Controllers;

use App\Corporation;

use Illuminate\Http\Request;

class CorporationController extends Controller
{
    function show()
    {
        $corporation = Corporation::all();
        return view('corporation.show', ['corporation' => $corporation]);
    }
}
