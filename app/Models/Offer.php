<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $table = "offers" ;
    protected $fillable=['id' ,'name_en','name_ar','price','details','created_at' , 'updated_at'];
    protected $hidden =['created_at' , 'updated_at'];

    public $timestamps = false ;

}