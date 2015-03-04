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
            {{ Field::text('StartMonth') }}
            {{ Field::text('EndMonth') }}
            {{ Field::text('Number') }}
            {{ Field::text('Quotas') }}

            <p>
                <input type="submit" value="Register" class="btn btn-success">
            </p>

            {{ Form::close() }}


</div> <!-- /container -->

@stop