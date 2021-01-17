<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
//use App\Http\Controllers\Front\FirstController;

class FirstController extends Controller
{
    public  function __construct()
    {
    //Inclure le pluriel
    $this->middleware('auth')->except('ShowName','ShowName1','getIndex');//Sauf ShowName1 et ShowName
   }
    public  function ShowName()
    {
        return 'string name1';
    }

    public  function ShowName1()
    {
        return 'string name2';
    }

    public  function ShowName3()
    {
        return 'string name3';
    }

    public  function  getIndex(){
      $data=['Zoubir','24','12/01/197'];
        /*  $obj=new \stdClass();
        $obj-> name='Zoubir';
        $obj-> Age=24;
        $obj-> date='12/01/1997';
        return view('welcome',compact('obj'));// objet*/
       return view('welcome',compact('data'));//premier solution  tableau de donnee
        //return view('welcome',$data); deuxame solution
     //return view('welcome')->with('name','Zoubir');
    }

}
