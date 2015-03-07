@extends('layout')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Docente</h1>     
    </div>
</div>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Monto</th>
            <th>Mes inicial</th>
            <th>Mes final</th>
            <th>Cuotas</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$teacher->full_name}}</td>
            <td>{{$teacher->Amount}}</td>
            <td>{{$cuotas->ImprimirMes($teacher->StartMonth)}}</td>
            <td>{{$cuotas->ImprimirMes(end($mes))}}</td>
             <td>{{$teacher->Number}}</td> 
        </tr>
        </tbody>
    </table>
    <table class="table table-striped">
        <tbody> 
            <h2>Total de cuotas</h2>
           <!-- Foreach usado de esta forma para poder llamar al otro array ya que los dos tienen el mismo rango -->
            <thead>
                <tr>
                    <th>Cuota a pagar</th>
                    <th>Mes a pagar</th>
                </tr>
            </thead>
            @foreach ($cal as $index=>$value)
            <tr>
             <td>S/. {{$value}}</td>
             <td>{{$cuotas->ImprimirMes($mes[$index]);  }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> <!-- /container -->

@stop