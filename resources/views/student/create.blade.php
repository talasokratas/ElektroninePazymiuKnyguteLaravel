@extends('layouts/app')

@section('title', 'Studentai')

@section('content')
<div class="form-wrapper">
 <form action={{route('student.save')}} method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Studento vardas</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="surname">Studento pavardė</label>
            <input type="text" class="form-control" id="surname" name="surname">
        </div>
        <div class="form-group">
            <label for="email">Elektroninis paštas</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="phone">Telefono numeris</label>
            <input type="number" class="form-control" id="phone" name="phone">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Saugoti</button>
    </form>
</div>
@endsection
