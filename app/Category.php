<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable=['name'];

    public function getNameAttribute($value){         //to make input by user UC

        return ucfirst($value);
    }

    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use($search){
                return $q->where('name','LIKE',  '%'.$search.'%');   //LIKE capital

        });




    }   //end of scopeWhenSearch
}
