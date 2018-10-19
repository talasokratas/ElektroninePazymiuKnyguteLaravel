@extends('layouts/app')

@section('title', 'Įvertinimas')

@section('content')
    <div class="table-wrapper">
<div class="form-wrapper">
    <h2>Pasirinkite studentą bei paskaitą iš sąrašo ir pataisykite įvertinimą</h2>
 <form action={{ url('grade/'.$grade->id) }} method="post">
     {{ method_field('PUT') }}
     {{ csrf_field() }}
     <div class="form-group">
         <h3>Studentas: {{$grade->student->name}} {{$grade->student->surname}}</h3>
         <input type="text" class="form-control" id="student" name="student_id" value="{{$grade->student->id}}" hidden>
     </div>
     <div class="form-group">
        <h3>Paskaita: {{$grade->lecture->name}} </h3>
         <input type="text" class="form-control" id="lecture" name="lecture_id" value="{{$grade->lecture->id}}" hidden>
     </div>
        <div class="form-group">
           <h3>Įvertinimo balas (0 - 10):</h3>
            <input type="number"  id="grade" name="grade" value="{{ $grade->grade }}">
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
    </div>

@endsection
