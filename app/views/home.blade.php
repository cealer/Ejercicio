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

    <h2> </h2>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Tipo de trabajo</th>
            <th>Descripción</th>
            <th>Ver</th>
        </tr>
        </thead>
        <tbody>
        
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td width="50">
                <a href="" class="btn btn-info">
                    Ver
                </a>
            </td>
        </tr>


        </tbody>
    </table>
    <p>
        <a href="">
            Ver todos en 
        </a>
    </p>
    
</div> <!-- /container -->

@stop