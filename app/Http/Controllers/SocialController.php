<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function Redirect($service){
      return Socialite::driver($service)->redirect();
    }

    /**
     * @param $service
     * @return mixed
     */
    public function Callback($service)
  {
      return  $user=Socialite::with($service);
  }
}
