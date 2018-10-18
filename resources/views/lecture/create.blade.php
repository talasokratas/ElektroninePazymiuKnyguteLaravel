@extends('layouts/app')

@section('title', 'Paskaitos')

@section('content')
<div class="form-wrapper">
 <form action={{route('lecture.save')}} method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Paskaitos Pavadinimas</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="surname">Paskaitos aprašymas</label>
            <input type="textbox" class="form-control" id="description" name="description" value="{{ old('description') }}">
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
