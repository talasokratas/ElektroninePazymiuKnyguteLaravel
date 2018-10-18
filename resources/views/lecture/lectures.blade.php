@extends('layouts/app')

@section('title', 'Paskaitos')

@section('content')


<div class="table-wrapper">
    <h2>Paskaitų sąrašas</h2>
    <a href={{ route('lecture.create') }} class="btn btn-primary" style="margin:2em">Pridėti naują paskaitą</a>
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>Eil. nr.</th>
            <th>Pavadinimas</th>
            <th>Aprašymas</th>
            <th>Veiksmai</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($lectures as $lecture)
            <tr>
                <td>{{$count++}}</td>
                <td>{{$lecture->name}}</td>
                <td>{{$lecture->description}}</td>
                <td>
                    <form method="post" action={{ url('lecture/'.$lecture->id) }}>
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn-danger"><i class="fa fa-trash"> Trinti</i></button>
                        @csrf
                    </form>
                    <form method="get" action={{ url('lecture/'.$lecture->id.'/edit') }}>
                        <button type="submit" class="btn-warning"><i class="fa fa-edit"> Taisyti</i></button>
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$lectures->links()}}
</div>

@endsection
