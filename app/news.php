<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table="news";
    protected  $fillable=[
        'title','content','writer','created_at','updated_at'
    ];
}
