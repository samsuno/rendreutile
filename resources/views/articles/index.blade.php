@extends('app')

@section('content')

    <h1>Objets à récupérer</h1> 
    @foreach($articles as $article)
        <h2>
            <a href="{{url('/articles', $article->id) }}">{{ $article->nom_article }}</a>
        </h2>
        <p> {{$article->etat_article}} </p>
    @endforeach   
   
    @stop

