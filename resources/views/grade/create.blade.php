@extends('layouts/app')

@section('title', 'Įvertinimas')

@section('content')
<div class="form-wrapper">
    <h2>Pasirinkite studentą bei paskaitą iš sąrašo ir įveskite įvertinimą</h2>
 <form action={{route('grade.save')}} method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <p>Studentas:</p>
            <select name="student_id">
                <option></option>
                @foreach($students as $student)
                    <option value="{{$student->id}}">{{$student->name}} {{$student->surname}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <p>Paskaita:</p>
            <select name="lecture_id">
                <option></option>
                @foreach($lectures as $lecture)
                    <option value="{{$lecture->id}}">{{$lecture->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
           <p>Įvertinimo balas (0 - 10):</p>
            <input type="number"  id="grade" name="grade" value="{{ old('grade') }}">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Saugoti</button>
    </form>
    @if ($errors->any())
        <ul class="input-error">
            @foreach($errors->all() as $error)
                <li style="color:red">{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>

@endsection
