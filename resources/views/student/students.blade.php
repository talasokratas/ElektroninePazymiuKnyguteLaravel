@extends('layouts/app')

@section('title', 'Studentai')

@section('content')


<div class="table-wrapper">
    <h2>Studentų sąrašas</h2>
    @if(Auth::user())
        <a href={{ route('student.create') }} class="btn btn-primary" style="margin:2em">Pridėti naują studentą</a>
    @endif
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>Eil. nr.</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>E. paštas</th>
            <th>Telefono nr.</th>
            <th>Įvertinimas</th>
            @if(Auth::user())
                <th>Veiksmai</th>
            @endif
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
                    <form method="get" action={{ url('student/'.$student->id) }}>
                        <button type="submit" class="btn-primary"><i class="fa fa-view"> Peržiūrėti įvertinimus</i></button>
                    </form>
                </td>
                @if(Auth::user())
                <td>
                    <form method="post" action={{ url('student/'.$student->id) }}>
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn-outline-primary"><i class="fa fa-trash"> Trinti</i></button>
                        @csrf
                    </form>
                    <form method="get" action={{ url('student/'.$student->id.'/edit') }}>
                        <button type="submit" class="btn-outline-primary"><i class="fa fa-edit"> Taisyti</i></button>
                    </form>
                </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$students->links()}}
</div>

@endsection
