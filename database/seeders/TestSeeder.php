<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qtd_user = 3;
        $qtd_course = 10;

        $users = User::factory($qtd_user)->create();
        $courses = Course::factory($qtd_course)->create();

        $courses->each(function ($course) use ($users){
            $qtd_lesson = 5;

            $lessons = Lesson::factory($qtd_lesson)->create([
                'course_id' => $course->id
            ]);

            $lessons->each(function ($lesson) use ($users) {
                $qtd_comment = 5;

                $comments = Comment::factory($qtd_comment)->create(fn() => [
                    'lesson_id' => $lesson->id,
                    'user_id' => $users->random()->id
                ]);

                $comments->each(function ($comment) use ($users){
                    $qtd_reply = 3;

                    Reply::factory($qtd_reply)->create(fn() => [
                        'comment_id' => $comment->id,
                        'user_id' => $users->random()->id
                    ]);
                });
            });
        });
    }
}
