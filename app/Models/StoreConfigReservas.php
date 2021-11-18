<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class StoreConfigReservas extends Model 
{
	protected $primaryKey = "store_id";
	protected $table = "store_config_reservas";


    public function store()
    {
        return $this->belongsTo('App\Models\Store','store_id','store_id');
    }
}
