<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Post;

class Post extends Model
{
    use HasFactory;

    protected $table = 'sale_posts'; 

    protected $fillable = ['title', 'description', 'image_path', 'user_id'];
    //não coloquei o 'slug' acima porque não desenvolvi a criação automática dele

    //$flight = Post::find(1);
    //dd($flight);


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
