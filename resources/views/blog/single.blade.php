@extends('layouts.pages')
@section('title', "|$post->title")
@section('content')
	<div class="row col-md-8 col-md-offset-2">
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->body }}</p>
		<hr>
		<p>Posted in: {{ $post->category->name}}</p>
		
	</div>
@endsection
