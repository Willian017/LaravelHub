<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Course::factory(2)->create();
        // Lesson::factory(10)->create([
        //     'course_id' => 1
        // ]);
        // Comment::factory(10)->create([
        //     'user_id' => 1,
        //     'lesson_id' => 1
        // ]);

        $this->call(TestSeeder::class);
    }
}
