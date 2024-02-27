<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Book extends Model
{
    use HasFactory;

    protected $fillable= ['title','price','user_id','description','image'];

    public function user(){
        return $this->brlongsTo(User::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
}
