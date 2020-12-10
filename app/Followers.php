<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Followers extends Model
{
    protected $table = "followers";
    protected $primaryKey = "id";
    
    public function user() {
        return  $this->hasOne('App\User', 'id', 'user_id');
    }
}
