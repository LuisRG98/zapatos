<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    public function getRouteKeyName()
    {
    	return 'publickey';
    }
}
