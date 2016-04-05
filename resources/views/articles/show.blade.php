@extends('app')

@section('content')

    <h1>{{ $article->nom_article}}</h1> 
    <section>
        {{$article->etat_article}}
    </section>
<!--    show categories only if it exists unless<=>if not-->
    @unless($article->tags->isEmpty())
    <h5>Categories:</h5>
    <ul>
        @foreach($article->tags as $tag)
        <li>{{ $tag->tag_name }}</li>
        @endforeach
    </ul>
    @endunless
   
@stop