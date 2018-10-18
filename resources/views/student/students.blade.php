@extends('layouts/app')

@section('title', 'Studentai')

@section('content')

    <h2>Studentų sąrašas</h2>
    <a href={{ route('student.create') }} class="btn btn-primary" style="margin:2em">Pridėti naują studentą</a>
<div class="table-wrapper">
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>Eil. nr.</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>E. paštas</th>
            <th>Telefono nr.</th>
            <th>Veiksmai</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{$count++}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td>
                    <form method="post" action={{ url('student/'.$student->id) }}>
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn-danger"><i class="fa fa-trash"> Trinti</i></button>
                        @csrf
                    </form>
                    <form method="get" action={{ url('student/'.$student->id.'/edit') }}>
                        <button type="submit" class="btn-warning"><i class="fa fa-edit"> Taisyti</i></button>
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$students->links()}}
</div>

@endsection
