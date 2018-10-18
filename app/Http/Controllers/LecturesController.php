<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    public function index()
    {

        return view('course/courses', ['courses' => Course::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Lecture;
        $course->name = $request->name;
        $course->description = $request->description;

        $course->save();
        Session::flash('message', 'Kursas sekmingai sukurtas!');
        return redirect(route('courses.show'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $course = Course::find($id);
//
//        return View::make('course.show')
//            ->with('course', $course);
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

        return view('course.edit')
            ->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->name = $request->name;
        $course->description = $request->description;

        $course->save();
        Session::flash('message', 'Kursas sekmingai pataisytas!');
        return redirect(route('courses.show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        Session::flash('message', 'Kursas sekmingai istrintas!');
        return redirect('/courses');

    }
}
