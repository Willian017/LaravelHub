<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    public function lesson()
    {
        $this->belongsTo(Lesson::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function replys()
    {
        $this->hasMany(Reply::class);
    }

    protected $fillable = [
        'user_id',
        'lesson_id',
        'content'
    ];
}
