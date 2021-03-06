@extends('layout')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Registra tu préstamo</h1>     
    </div>
</div>
<div class="container">

            {{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}
            
            {{ Field::text('full_name') }}
            {{ Field::text('Amount') }}
            {{ Field::selectMonth('StartMonth') }}
            {{ Field::text('Number') }}
            <p>
                <input type="submit" value="Registrar" class="btn btn-success">
            </p>

            {{ Form::close() }}


</div> <!-- /container -->

@stop