@extends('themain')

@section('title', '| Izveidot jaunu recepti')

@section('content')

<div class="col-md-10 col-md-offset-1">
    <h2>Izveidot jaunu recepti!</h2>
    <hr>
    {!! Form::open(['route' => 'posts.store']) !!}
        {{Form::label('title', 'Receptes nosaukums:')}}
        {{Form::text('title', null, array('class' => 'form-control'))}}
        
        {{Form::label('body', "Recepte: ")}}
        {{Form::textarea('body', null, array('class' => 'form-control'))}}
        {{Form::submit('Pievienot', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:10px'))}}
    {!! Form::close() !!}
    
</div>

@endsection