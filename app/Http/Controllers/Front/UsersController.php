<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UsersController extends Controller
{
   public  function ShowUserName():string
   {
       return "Zoubir chennifa";
   }


}
