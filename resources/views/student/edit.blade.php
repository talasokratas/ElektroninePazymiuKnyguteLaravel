@extends('layouts/teacher')

@section('title', 'Taisyti paskaitą')

@section('content')
    <form action="/subjects/{{$subject->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="course">Paskaitos pavadinimas</label>
            <input type="text" class="form-control" id="course" name="name" value="{{$subject->name}}">
        </div>
        <div class="form-group">
            <label for="description">Paskaitos aprašymas</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$subject->description}}">
        </div>
        <div class="form-group">
            <label for="start">Data</label>
            <input type="date" class="form-control" id="start" name="date" value="{{$subject->date->format('Y-m-d')}}">
        </div>
        <div class="form-group">
            <label for="group">Grupė</label>
            <input type="text" class="form-control" id="group" name="group" value="{{$subject->group->name}}">
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

@endsection
