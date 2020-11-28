<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable = ['name'];

    public function store()
    {
    	return $this->belongsTo(Store::class);
    }

    public function transaction()	// title of transaction - in or out
    {
    	return $this->hasMany(Transaction::class);
    }
}
