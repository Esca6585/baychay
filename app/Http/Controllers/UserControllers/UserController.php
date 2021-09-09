<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
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
