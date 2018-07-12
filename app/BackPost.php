<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BackPost extends Model
{
    protected $fillable = ['id','name','excerpt','body','file','slug','status'];

    public function getRouteKeyName(){
        return 'slug';
    }
}
