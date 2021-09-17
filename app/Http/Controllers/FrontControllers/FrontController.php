<?php

namespace App\Http\Controllers\FrontControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tea;
use App\Models\Message;
use Carbon\Carbon;
use Cart;
use App\Http\Requests\MessageRequest;


class FrontController extends Controller
{
    public function index()
    {   
        $teaLasts = Tea::take(4)->where('sale_type', 'New')->inRandomOrder()->get();

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

    public function singleProduct($lang, Tea $tea, $slug)
    {
        $trendTeas = Tea::take(4)->where('sale_type', 'New')->inRandomOrder()->get();

        return view('front-end.single-product', compact('tea','trendTeas'));
    }

    public function message(MessageRequest $request)
    {
        $message = new Message;

        $message->name = ucfirst($request->name);
        $message->phone_number = $request->phone_number;
        $message->email = strtolower($request->email);
        $message->messages = $request->messages;

        $message->save();

        return back()->with('success-message', 'Your message sent successfully!');
    }

    public function addShoppingCart(Request $request)
    {
        Cart::add($request->id)->associate('App\Models\Tea');
        return $request->id;
    }
}
