@extends('layouts/app')

@section('title', 'Studentai')

@section('content')


<div class="table-wrapper">
    <h2>{{$student->name}} {{$student->surname}}</h2>
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>Paskaita</th>
            <th>Balas</th>
            @if(Auth::user())
                <th>Veiksmai</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach ($grades as $grade)
            <tr>
                <td>{{$grade->lecture->name}}</td>
                <td>{{$grade->grade}}</td>
                @if(Auth::user())
                    <td>
                        <form method="get" action={{ url('grade/'.$grade->id) }}>
                            <button type="submit" class="btn-warning"><i class="fa fa-edit"> Taisyti</i></button>
                        </form>
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection

