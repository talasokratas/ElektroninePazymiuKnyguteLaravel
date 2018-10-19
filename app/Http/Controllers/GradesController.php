<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Http\Requests\GradeStoreRequest;
use App\Lecture;
use App\Student;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function index()
    {

        return view('course/courses', ['courses' => Course::all()]);

    }

    public function create()
    {
        $students = Student::orderBy('surname','asc')->get();
        $lectures = Lecture::orderBy('name','asc')->get();
        return view('grade/create', ['students' => $students, 'lectures' => $lectures]);
    }

    public function store(GradeStoreRequest $request)
    {
        $grade = new Grade;
        $grade->grade = $request->grade;
        $grade->student_id = $request->student_id;
        $grade->lecture_id = $request->lecture_id;

        $grade->save();
        return redirect(route('grade.create'));
    }

    public function results($id)
    {
        $student = Student::find($id);
        $grades = Grade::where('student_id', $id)->get();
        return view('grade.grades', ['student'=> $student, 'grades' => $grades]);
    }

    public function edit($id){

        $grade = Grade::find($id);

        return view('grade.edit',['grade'=> $grade]);
    }

    public function update(GradeStoreRequest $request, $id)
    {
        $grade = Grade::find($id);
        $grade->grade = $request->grade;
        $grade->save();

        return redirect('student/'.$grade->student_id);
    }

}
