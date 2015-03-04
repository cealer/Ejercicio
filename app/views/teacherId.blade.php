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
            <th>Total de cuotas</th>
        
        </tr>
        </thead>
        <tbody>

        <tr>

            <td>{{$teacher->full_name}}</td>
            <td>{{$teacher->Amount}}</td>
            <td>{{$teacher->StartMonth}}</td>
            <td>{{$teacher->EndMonth}}</td>
             <td>{{$teacher->Number}}</td> 

            <td width="50">
                <a href="" class="btn btn-info">
                    Ver
                </a>
            </td>
        </tr>
        </tbody>
    </table>

    <table class="table table-striped">
        
        <tbody> 
            <tr>
             <td></td>
        </tr>
        </tbody>

    </table>
</div> <!-- /container -->

@stop