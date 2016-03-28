@extends('app')

@section('content')

    <h1>Publier un dons</h1> 
    <hr>
    {!! Form::open(['url'=>'articles']) !!}
       
        @include('articles.form',['submitButtonText' => 'Add Article'])
    
    {!! Form::close() !!}
    
    @include('errors.list')
    
   
@stop

