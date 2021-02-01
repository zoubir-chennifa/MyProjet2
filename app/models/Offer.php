<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
   // protected $table='myoffers';//if name table != name de model son 's'
    protected $fillable=['name_fr','name_en','price','created_at','updated_at','details_fr','details_en'];//les colon =>.
    protected $hidden=['created_at','updated_at'];//hidden 2 colon show none
    //public $timestamps=false;//date de insert == null

}
