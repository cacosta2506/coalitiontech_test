<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','quantity','price'];

    
 public function valueNumber()
 {
    return $this->quantity * $this->price;
 }   
}
