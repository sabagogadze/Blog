@extends('layouts.pages')
@section('title', 'View Post')
@section('content')
<div class="row">
	<div class="col-md-8">
		<h1>{{ $post->title }} </h1> <br>
		<p class="lead">{{ $post->body }}</p>
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Url :</dt>
				<dd><a class="btn btn-primary" href="{{ url('blog/'.$post->slug) }}">View Blog</a></dd>
			</dl>


			<dl class="dl-horizontal">
				<dt>Category :</dt>
				<dd>{{ $post->category->name }}</dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Created At:</dt>
				<dd>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
			</dl>

			<dl class="dl-horizontal">
				<dt>Last Updated:</dt>
				<dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
			</dl>
			<hr>
			<div class="row">
				
				<div class="col-sm-6 postdelete">
					{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>"btn btn-primary btn-block")) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::model($post, array('route' => array('posts.destroy', $post->id), 'files' => true, 'method' => 'DELETE')) !!}﻿
					{!! Form::submit('DELETE', ['class'=>"btn btn-danger btn-block "]) !!}

					{!! Form::close() !!}

			</div>


		</div> <br>
		<div class="row">
			<div class="col-md-12">
				{!! Html::linkRoute('posts.index', '<< See all Posts', array(), array('class'=>"btn btn-default btn-block btn-h1-spacing")) !!}
			</div>
		</div>
	</div>
	</div>
</div>

@endsection