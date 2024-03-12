<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /*private array $courses;
    public function __construct(){
    $this->courses = [
        [
=======
use App\Http\Requests\CreateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private array $courses;

    public function __construct(){
        $this->courses = [
            [
>>>>>>> 26c34aa08960420de0fcad8e41d39d0902358979
            'id' => 1,
            'title' => 'Elso pelda title',
            'description' => 'Elso pelda description',
            'author' => 'Author egy',
            'url' => 'http://courseegy.hu',
<<<<<<< HEAD
        ],
        [
=======
            ],
            [
>>>>>>> 26c34aa08960420de0fcad8e41d39d0902358979
            'id' => 2,
            'title' => 'Masodik pelda title',
            'description' => 'Masodik pelda description',
            'author' => 'Author ketto',
            'url' => 'http://courseketto.hu',
<<<<<<< HEAD
        ],
    ];
}*/
=======
            ],
        ];
    }
>>>>>>> 26c34aa08960420de0fcad8e41d39d0902358979
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $courses = Course::all();
        return response()->json($courses);
=======
        return response()->json(Course::all());
>>>>>>> 26c34aa08960420de0fcad8e41d39d0902358979
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(Request $request)
    {
        //
=======
    public function store(CreateCourseRequest $request)
    {
        $data = $request->only([
            'title',
            'description',
            'author',
            'url'
        ]);

        $course = Course::create($data);

        return response()->json($course);
>>>>>>> 26c34aa08960420de0fcad8e41d39d0902358979
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
<<<<<<< HEAD
        $course = Course::findOrFail($id);
        return response()->json($course);
=======
        return response()->json(Course::find($id));
>>>>>>> 26c34aa08960420de0fcad8e41d39d0902358979
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
