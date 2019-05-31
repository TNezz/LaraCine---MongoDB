<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class Movie extends MongoModel
{
    protected $table = "movies";

    protected $fillable = ['movie', 'year', 'direction'];

}
