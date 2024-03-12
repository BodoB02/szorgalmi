<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{

=======
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
>>>>>>> 26c34aa08960420de0fcad8e41d39d0902358979
    public function run(): void
    {
        $courses = [
            [
<<<<<<< HEAD
                'id' => 1,
=======
>>>>>>> 26c34aa08960420de0fcad8e41d39d0902358979
                'title' => 'Elso pelda title',
                'description' => 'Elso pelda description',
                'author' => 'Author egy',
                'url' => 'http://courseegy.hu',
            ],
            [
<<<<<<< HEAD
                'id' => 2,
=======
>>>>>>> 26c34aa08960420de0fcad8e41d39d0902358979
                'title' => 'Masodik pelda title',
                'description' => 'Masodik pelda description',
                'author' => 'Author ketto',
                'url' => 'http://courseketto.hu',
            ],
        ];
<<<<<<< HEAD
        foreach ($courses as $course) {
            Course::create([
                'title' => $course['title'],
                'description' => $course['description'],
                'author' => $course['author'],
                'url' => $course['url'],
            ]);
=======

        foreach ($courses as $course) {
            Course::firstOrCreate($course);
>>>>>>> 26c34aa08960420de0fcad8e41d39d0902358979
        }
    }
}
