<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    public function lessons()
    {
        $this->hasMany(Lesson::class);
    }

    public function purchases()
    {
        $this->hasMany(Purchase::class);
    }

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'image'
    ];
}
