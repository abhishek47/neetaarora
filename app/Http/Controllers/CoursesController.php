<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

class CoursesController extends Controller
{
   
   public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(10);

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [
               'title' => 'required',
               'body'  => 'required',
               'intro' => 'required'
            ]);

        $course = new Course;

        $course->title = request('title');
        $course->body = request('body');
        $course->intro = request('intro');
        $course->slug = str_slug(request('title'), '-');

        auth()->user()
              ->courses()
              ->save($course);

        return redirect('/courses');      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Course $course)
    {
        $this->validate(request(), [
               'title' => 'required',
               'body'  => 'required',
               'intro' => 'required'
            ]);
         
        $course->title = request('title');
        $course->body = request('body');
        $course->intro = request('intro');
        $course->slug = str_slug(request('title'), '-'); 
        $course->save();

        return redirect('/courses/' . $course->slug);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect('/courses'); 
    }
}
