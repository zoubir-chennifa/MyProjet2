<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\models\Offer;
//use Dotenv\Validator;
use Illuminate\Http\Request;

class CrudeController extends Controller
{
 public function GetOffers()
 {
     return Offer::get();//select * from offers
     //return Offer::select('id','name');/select id, name from offers
 }

 /*public function Store(){
     Offer::create([
         'name'=>'Offer2',
         'price'=>'500',
         'detals'=>'Offer ',
     ]);
 }
*/
 public function Create(){
   return view('Offers.Create');
 }

 public function GetMasseges()
 {
     return  $Errors=[
         'name.required'=>__('masseges.Offer name required'),
         'name.unique'=>__('masseges.Offer name unique'),
         'details.required'=>__('masseges.Offer details required'),
         'price.numeric'=>__('masseges.Offer price numeric'),
         'price.required'=>__('masseges.Offer price required'),

     ];
 }
 private function GetRows(){
     return  $Rows=['name'=>'required|max:100|unique:offers,name',
         'price'=>'required|numeric',
         'details'=>'required',
     ];

 }
 public function Store(Request $request){
//validate data before insert to database
     $massages=$this->GetMasseges();
     $Rows =$this->GetRows();
     $validator= Validator::make($request->all(),$Rows ,$massages);
     if($validator->fails())
     {
         return redirect()->back()->withErrors($validator)->withInput($request->all());
        // return $validator ->errors();
     }
     //insert data
     Offer::create([
         'name'=> $request-> name,
         'price'=>$request->price,
         'detals'=>$request->details,
     ]);
  return redirect()->back()->with(["success"=>'Ajouter avec succes']);
 }
}
