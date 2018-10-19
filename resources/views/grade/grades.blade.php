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
            <th>Veiksmai</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($grades as $grade)
            <tr>
                <td>{{$lectures->find($grade->lecture_id)->name}}</td>
                <td>{{$grade->grade}}</td>
                <td>
                    <form method="post" action={{ url('student/'.$grade->id) }}>
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn-danger"><i class="fa fa-trash"> Trinti</i></button>
                        @csrf
                    </form>
                    <form method="get" action={{ url('student/'.$grade->id.'/edit') }}>
                        <button type="submit" class="btn-warning"><i class="fa fa-edit"> Taisyti</i></button>
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
