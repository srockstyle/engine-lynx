@extends('app')

  @section('content')
    <h1>{{{ $article->title }}}</h1>
    <p>{{{ $article->body }}}</p>
  <a href="/">Back</a>
  @endsection
