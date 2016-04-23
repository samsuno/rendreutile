@extends('app')

@section('content')

    <h1>Publier un don</h1> 
    <hr>
    {!! Form::open(['url'=>'articles']) !!}
       
        @include('articles.form',['submitButtonText' => 'Ajouter l\'article'])
    
    {!! Form::close() !!}
    
    @include('errors.list')
    
   
@stop

