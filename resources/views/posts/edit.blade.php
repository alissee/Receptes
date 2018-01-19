@extends('themain')

@section('title', '| Labot recepti')

@section('content')

<div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post -> id], 'method' => 'PUT' ]) !!}
     <div class="col-md-8">
         {{Form::label('title', 'Receptes nosaukums:')}}
    {{Form::text('title', null, ["class" => 'form-control'])}}
    
         {{Form::label('body', 'Recepte:', ['class'=>'form-spacing-top'] )}}
    {{Form::textarea('body', null, ['class' => 'form-control'])}}
    </div>
   
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Created at:</dt>
                <dd>{{ $post -> created_at }}</dd>                
            </dl>
            <dl class="dl-horizontal">
                <dt>Last Updated:</dlt>
                <dd>{{ $post -> updated_at }}</dd>                
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.show', 'Atcelt', array($post->id), array('class' =>'btn btn-danger btn-block')) !!}
                    
                </div>
                <div class="col-sm-6">
                    {{Form::submit('Saglabāt izmaiņas', ['class' => 'btn btn-success btn-block'])}}
                   
                </div>
            </div>
        </div>
    </div>
    
    {!! Form::close() !!}
  </div>

@stop