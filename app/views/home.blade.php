@extends('layout')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Docentes</h1>
        <p>
            Proyecto que estamos construyendo con Laravel para el curso profesional
            de PHP y Laravel de Mejorando.la:
            <a href="https://mejorando.la/cursos/php-laravel">
                https://mejorando.la/cursos/php-laravel
            </a>
        </p>
      
        <p>
            <a href='' class="btn btn-primary btn-lg" role="button">
                Postúlate &raquo;
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