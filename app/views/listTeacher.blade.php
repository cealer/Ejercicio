@extends('layout')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Docentes</h1>
        <p>
            Listado de todos los docentes registrados recientemente
        </p>
    </div>
</div>

<div class="container">
    <h1>Últimos candidatos</h1>
    
    <h2> </h2>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Monto</th>
            <th>Mes inicial</th>
            <th>Cuotas</th>
            <th>Ver</th>
        </tr>
        </thead>
        <tbody>
        
        <tr>
            @foreach($docentes as $value)
            <td>{{$value->full_name}}</td>
            <td>S/. {{$value->Amount}}</td>
            <td>{{ $cuotas->ImprimirMes( $value->StartMonth ) }}</td>
            <td>{{$value->Number}}</td>
            <td width="50">
                <a href="{{route('teacherId',[$value->id])}}" class="btn btn-info">
                    Ver
                </a>
            </td>
        </tr>
        @endforeach    
        </tbody>
    </table>
    <center>{{ $docente->links() }} </center> 
</div> <!-- /container -->

@stop