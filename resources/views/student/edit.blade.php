@extends('layouts/app')

@section('title', 'Taisyti')

@section('content')
    <div class="form-wrapper">
        <form action={{ url('student/'.$student->id) }} method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Studento vardas</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
            </div>
            <div class="form-group">
                <label for="surname">Studento pavardė</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{$student->surname}}">
            </div>
            <div class="form-group">
                <label for="email">Elektroninis paštas</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$student->email}}">
            </div>
            <div class="form-group">
                <label for="phone">Telefono numeris</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{$student->phone}}">
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
