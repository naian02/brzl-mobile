<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

class FrontEndController extends Controller
{
    public function home(): View
    {
        return view('layouts.frontend');
    }

    public function slider(): View
    {
        return view('frontend.home.index');
    }

}
