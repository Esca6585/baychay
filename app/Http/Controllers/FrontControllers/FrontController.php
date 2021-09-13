<?php

namespace App\Http\Controllers\FrontControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tea;

class FrontController extends Controller
{
    public function index()
    {
        $teaLasts = Tea::take(4)->get();
        $teas = Tea::orderByDesc('id')->paginate(8);

        if(request()->ajax()){
            return view('layouts.product-area-2', compact('teas'))->render();
        }

        return view('front-end.main', compact('teaLasts', 'teas'));
    }
    
    public function contactUs()
    {
        return view('front-end.contact-us');
    }

    public function blog()
    {
        return view('front-end.blog');
    }
}
