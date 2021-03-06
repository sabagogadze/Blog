@extends('layouts.pages')
@section('title', 'Edit Post')
@section('content')
<div class="row">
{!! Form::model($post, array('route' => array('posts.update', $post->id), 'files' => true, 'method' => 'PUT')) !!}﻿
	<div class="col-md-8">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class'=>'form-control']) !!} <br>
		{!! Form::label('category_id', 'Category:') !!}
    			<select class="form-control" name="category_id">
    				@foreach ($categories as $category)
    					<option value="{{ $category->id }}">{{ $category->name }}</option>
    				@endforeach 
    			</select>
		{!! Form::label('slug', 'slug :') !!}

    	{!! Form::text('slug', null, array('class'=>'form-control')) !!}
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
	</div>
	<div class="col-md-4">
		<div class="well">
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

				<div class="col-sm-6">
					{!! Html::linkRoute('posts.show', 'Cencel', array($post->id), array('class'=>"btn btn-danger btn-block")) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::submit('Save Changes', ['class'=>"btn btn-success btn-block"]) !!}
					
				</div>
			</div>


		</div>
	</div>
	</div>
{!! Form::close() !!}

@endsection