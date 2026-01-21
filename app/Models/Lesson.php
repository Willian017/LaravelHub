<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /** @use HasFactory<\Database\Factories\LessonFactory> */
    use HasFactory;

    public function course()
    {
        $this->belongsTo(Course::class);
    }

    public function comments()
    {
        $this->hasMany(Comment::class);
    }

    protected $fillable = [
        'course_id',
        'name',
        'description',
        'video_url'
    ];
}
