<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{

    public function run(): void
    {
        $courses = [
            [
                'id' => 1,
                'title' => 'Elso pelda title',
                'description' => 'Elso pelda description',
                'author' => 'Author egy',
                'url' => 'http://courseegy.hu',
            ],
            [
                'id' => 2,
                'title' => 'Masodik pelda title',
                'description' => 'Masodik pelda description',
                'author' => 'Author ketto',
                'url' => 'http://courseketto.hu',
            ],
        ];
        foreach ($courses as $course) {
            Course::create([
                'title' => $course['title'],
                'description' => $course['description'],
                'author' => $course['author'],
                'url' => $course['url'],
            ]);
        }
    }
}
