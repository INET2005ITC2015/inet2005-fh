@extends('app')

@section('content')

    <h1>{{$article->title}}</h1>
    <hr/>
    <article>
        <div class="body">{{$article->body}}</div>
        <br/>
        <a href="{{action('ArticlesController@index')}}">&lt;&lt;Go Back</a>
    </article>

@stop