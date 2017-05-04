<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';


   /* public function goods() {
        return $this->belongsToMany('App\goods', 'goods__orders')->withPivot('amount');
    }*/
}
