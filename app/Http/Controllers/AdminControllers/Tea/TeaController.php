<?php

namespace App\Http\Controllers\AdminControllers\Tea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\TeaRequest;
use App\Models\Tea;
use Hash;
use Str;
use Image;

class TeaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $lang, $pagination = 10)
    {        
        if($request->pagination) {
            $pagination = (int)$request->pagination;
        }
        
        $teas = Tea::orderByDesc('id')->paginate($pagination);

        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));
                
                $requestData = ['name_tm', 'name_en', 'name_ru', 'sale_type', 'price', 'sale_price', 'discount'];
    
                $teas = Tea::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->orderByDesc('id')->paginate($pagination);
            }
            
            return view('admin-panel.tea.tea-table', compact('teas', 'pagination'))->render();
        }

        return view('admin-panel.tea.tea', compact('teas', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tea $tea)
    {
        return view('admin-panel.tea.tea-form', compact('tea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeaRequest $request)
    {   
        if($request->file('images')){
            $images = $request->file('images');
            
            $date = date("d-m-Y H-i-s");
            
            foreach($images as $image){
                
                $filerandname = Str::random(10);
                $fileext = $image->getClientOriginalExtension();

                $filename = $filerandname . '.' . $fileext;
                
                $path = 'assets/tea/' . Str::slug($request->name_tm . '-' . $date ) . '/';

                $image->move($path, $filename);

                $imageFit = Image::make($path . $filename)->fit(650, 770);

                $imageFitName = $filerandname . '-650x770.' . $fileext;
            
                $imageFit->save($path . $imageFitName , 80);
                
                $original = $path . $filename;
                $thumb = $path . $imageFitName;

                $imagesArray[] = [
                    'thumb' => $thumb,
                    'original' => $original
                ];

            }

            $tea = new Tea;

            $tea->name_tm = $request->name_tm;
            $tea->name_en = $request->name_en;
            $tea->name_ru = $request->name_ru;
            $tea->images = $imagesArray;
            $tea->price = $request->price;
            $tea->sale_type = $request->sale_type;
            
            if($request->discount){
                $tea->sale_price = ($request->price - ($request->price*$request->discount/100));
                $tea->discount = $request->discount;
            }

            $tea->save();
            
            return redirect()->route('tea.index', app()->getlocale())->with('success', 'Your message has been sent successfully!');
        }

        return back()->with('error', 'There was a failure while sending the message!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Tea $tea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Tea $tea)
    {
        return view('admin-panel.tea.tea-form', compact('tea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function update($lang, TeaRequest $request, Tea $tea)
    {
        //
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Tea $tea)
    {
        //
    }
}
