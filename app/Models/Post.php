<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use softDeletes;
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'title',
        'image',
        'description',
        'category_id',
        'user_id',
    ];

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
}
