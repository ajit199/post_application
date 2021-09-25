<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function posts(){
        $foreignkey = 'user_id';
      return  $this->hasMany(Post::class,$foreignkey);
    }

    public function comments(){
      return $this->hasMany(Comment::class);
    }
}
