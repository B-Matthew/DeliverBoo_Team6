<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
            'name',
            'lastname',
            'address',
            'email',
            'price',
            'confirmed',
        ];

    public function products() {

        return $this->belongsToMany(Product::class);
    }
}
