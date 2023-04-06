@extends('layouts.app')

@section('page-name')
Train Table
@endsection

@section('table-content')

<h1>tabella treni</h1>

<section>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">codice_treno</th>
        <th scope="col">azienda</th>
        <th scope="col">numero carrozze</th>
        <th scope="col">partenza</th>
        <th scope="col">arrivo</th>
        <th scope="col">partenza alle</th>
        <th scope="col">arrivo alle</th>
        <th scope="col">in ritardo di</th>
        <th scope="col">stato</th>

        </tr>
    </thead>
    <tbody >
        @foreach ($trains as $train)
        <tr >
        <td>{{$train->id}}</td>
        <td>{{$train->codice_treno}}</td>
        <td>{{$train->azienda}}</td>
        <td>{{$train->numero_carrozze}}</td>
        <td>{{$train->stazione_di_partenza}}</td>
        <td>{{$train->stazione_di_arrivo}}</td>
        <td>{{$train->orario_di_partenza}}</td>
        <td>{{$train->orario_di_arrivo}}</td>
        <td>{{$train->in_orario}}</td>
        <td>{{$train->cancellato}}</td>
        </tr> 
        @endforeach
    </tbody>
    </table>
</section>
@endsection