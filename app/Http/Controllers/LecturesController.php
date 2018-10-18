<?php

namespace App\Http\Controllers;

use App\Http\Requests\LectureStoreRequest;
use App\Lecture;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    public function index()
    {
        $count = 1;
        $lectures = Lecture::orderBy('name','asc')->paginate(20);
        return view('lecture/lectures', ['lectures' => $lectures, 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lecture/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LectureStoreRequest $request)
    {
        $lecture = new Lecture;
        $lecture->name = $request->name;
        $lecture->description = $request->description;
        $lecture->save();
        return redirect(route('lectures.show'));
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
        $lecture = Lecture::find($id);

        return view('lecture.edit')
            ->with('lecture', $lecture);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LectureStoreRequest $request, $id)
    {
        $lecture = Lecture::find($id);
        $lecture->name = $request->name;
        $lecture->description = $request->description;

        $lecture->save();
        return redirect(route('lectures.show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecture = Lecture::find($id);
        $lecture->delete();
        return redirect('/lectures');

    }
}
