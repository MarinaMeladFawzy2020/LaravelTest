<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Http\Requests\OfferRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization ;

class CrudController extends Controller
{
    
    public function __construct()
    {
    }

 
    public function getoffer()
    {
        return Offer::get();
        //return Offer::select('id','name')->get();
    }

    // Basic Insert static data 
    // public function store(){
    //     Offer::create([
    //         'name'=> 'offer3',
    //         'price'=> '100',
    //         'details'=> 'read more ....',
    //     ]);
    // }

    public function create(){
        return view('offer/create');
    }

    public function store(OfferRequest $request){    //Request $request
        // Validation 

    
        //Old Method for Validation
        // $rules= $this -> getRules();
        // $message = $this -> getMessage();
        // $validator = Validator::make($request->all() , $rules , $message);
        // if($validator->fails()){
        //     // return $validator -> errors() -> first(); 
        //     // return $validator -> errors() ; 
        //      return redirect()->back()->withErrors($validator)->withInput($request->all());
        // }

        // insert database 
        Offer::create([
            'name_en'=> $request->name_en,
            'name_ar'=> $request->name_ar,
            'price'=> $request->price,
            'details'=> $request->details,
        ]);

        return redirect()->back()->with(['success' => 'Save Successfuly']);
    }

    //Old Method for Validation
    // protected function getRules(){
    //     $rules=[
    //         'name'=> 'required | max:100 | unique:offers,name',
    //         'price'=> 'required | numeric' ,
    //         'details'=> 'required',
    //     ];
    //  }

    // protected function getMessage(){
    //    return $message=[
    //         'name.required' =>__('messages.offernamereq'),  // read from folder lang (ar - en ) -> file messages
    //         'name.unique' => 'الاسم موجود ' ,
    //         'price.required' => 'السعر مطلوب ' ,
    //     ];
    // }


 

    public function getAllOffers(){
        // $alloffers = Offer::select('id','name_en' ,'name_ar' , 'price' , 'details')->get();
        $alloffers = Offer::select('id','name_'.LaravelLocalization::getCurrentLocale().' as name' , 'price' , 'details')->get();
        return view('offer/all' , compact('alloffers'));
    }

 
}
