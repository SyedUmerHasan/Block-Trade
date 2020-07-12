<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
    
    protected $table = "post";
    protected $primaryKey = "id";
    
    public function user() {
        return  $this->hasOne('App\User', 'id', 'user_id');
    }
}
