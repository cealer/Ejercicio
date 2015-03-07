@extends('layout')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>App de préstamo para docentes</h1>
        <p>
            Proyecto de préstamo
        </p>
      
        <p>
            <a href='{{ route('signUp') }}' class="btn btn-primary btn-lg" role="button">
                Solicitar préstamo &raquo;
            </a>
        </p>
     
    </div>
</div>

<div class="container">
    <h1>Últimos candidatos</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Monto</th>
            <th>Mes inicial</th>
            <th>Cuotas</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($latest_docentes as $value)
        <tr>
            <td>{{$value->full_name}}</td>
            <td>S/. {{$value->Amount}}</td>
            <td>{{$cuotas->ImprimirMes($value->StartMonth)}}</td>
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
    <p>
        <a href="{{route('teacherList')}}">
            Ver toda la lista
        </a>
    </p>
    
</div> <!-- /container -->

@stop