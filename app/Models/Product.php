<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function types()
    {
    	return $this->hasMany(Type::class);
        
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function getPriceAttribute($value){
        $discount = $value * ($this->discount/100);//Kortingineuro's
        $final_price = $value - $discount;//Haalkortingafvanprijs
        return number_format($final_price,2);
    }//Zorgaltijdvoor2decimalen}
}
