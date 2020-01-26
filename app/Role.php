<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
   // protected $fillable =['name'];

   public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use($search){
                return $q->where('name','LIKE',  '%'.$search.'%');   //LIKE capital
        });

    } //end of scopeWhenSearch


    public function getNameAttribute($value){

        return ucfirst($value);

    }   // end of getNameAttribute



}   //end of Role model
