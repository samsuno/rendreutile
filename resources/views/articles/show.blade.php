@extends('app')

@section('content')

    <h1>{{ $article->nom_article}}</h1> 
    <section>
        {{$article->etat_article}}
    </section>
   
@stop