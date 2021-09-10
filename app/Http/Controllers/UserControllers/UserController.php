<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tea;

class UserController extends Controller
{
    public function index()
    {
        $teaLasts = Tea::take(4)->get();
        $teas = Tea::orderByDesc('id')->paginate(8);

        return view('front-end.main', compact('teaLasts', 'teas'));
    }
    
    public function contactUs()
    {
        return view('front-end.contact-us');
    }
}
