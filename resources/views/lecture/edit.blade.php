@extends('layouts.app')

@section('title', 'Taisyti')

@section('content')
    <div class="form-wrapper">
        <form action={{ url('lecture/'.$lecture->id) }} method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="name">Paskaitos pavadinimas</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$lecture->name}}">
            </div>
            <div class="form-group">
                <label for="tinyMCE">Paskaitos aprašymas</label>
                <input type="text" class="form-control" id="tinyMCE" name="description" value="{{$lecture->description}}">
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
