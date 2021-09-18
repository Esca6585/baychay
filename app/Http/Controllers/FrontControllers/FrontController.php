<?php

namespace App\Http\Controllers\FrontControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Tea;
use App\Models\Message;
use Carbon\Carbon;
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
        $tea = Tea::find($request->id);

        $price = $tea->sale_price ? $tea->sale_price : $tea->price;

        $tax = 0;

        $teaData = [
            'id' => $tea->id,
            'name_tm' => $tea->name_tm,
            'name_en' => $tea->name_en,
            'name_ru' => $tea->name_ru,
            'images' => $tea->images,
            'price' => $tea->price,
            'sale_price' => $tea->sale_price,
            'discount' => $tea->discount,
            'sale_type' => $tea->sale_type
        ];

        Cart::add([
            ['id' => $tea->id, 'name' => $tea->name_tm, 'qty' => 1, 'price' => $price, 'weight' => 550, 'options' => $teaData ]
        ]);

        return response()->json(['success-message' => 'Tea added in Cart']);
    }

    public function setCookie(Request $request){
        $minutes = 1;
        
        $response = new Response('Set Cookie');
        
        $response->withCookie(cookie('cart', $request->id, $minutes));

        return $response;
    }

    public function getCookie(Request $request){
        $value = $request->cookie('cart');
        echo $value;
    }
}
