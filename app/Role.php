<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
   protected $fillable =['name'];


   //Scopes://

   public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use($search){
                return $q->where('name','LIKE',  '%'.$search.'%');   //LIKE capital
        });

    } //end of scopeWhenSearch

    public function scopeWhereRoleNot($query, $role_name){
        return $query->whereNotIn('name', (array)$role_name);




    }  //end of scopeWhereRoleNot


    public function getNameAttribute($value){

        return ucfirst($value);

    }   // end of getNameAttribute







}   //end of Role model
