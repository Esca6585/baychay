<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeaController extends Controller
{
    public function index()
    {
        return view('front-end.main');
    }
    
    public function contactUs()
    {
        return view('front-end.contact-us');
    }
}
