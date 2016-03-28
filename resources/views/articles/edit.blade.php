@extends('app')

@section('content')

<h1>edit: {!! $article->nom_article !!}</h1>
<hr>
     {!! Form::model($article, ['method'=> 'PATCH' , 'action' => ['ArticlesController@update', $article->id]]) !!}
   
         @include('articles.form', ['submitButtonText' => 'Update Article'])
         
    {!! Form::close() !!}
    
    @include('errors.list')
    
@stop

