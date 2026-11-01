<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;
use App\Models\User;


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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
