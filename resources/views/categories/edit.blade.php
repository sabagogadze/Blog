@extends('layouts.pages')
@section('title', 'Edit Category')
@section('content')
	
	{!! Form::model($category, array('route' => array('categories.update', $category->id), 'files' => true, 'method' => 'PUT')) !!}﻿
		<div class="col-md-8">
			{!! Form::label('name', 'Edit Category:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		<div class="row">

				<div class="col-sm-3">
					{!! Html::linkRoute('categories.index', 'Cencel', array($category->id), array('class'=>"btn btn-danger btn-block")) !!}
				
					{!! Form::submit('Save Changes', ['class'=>"btn btn-success btn-block"]) !!}
					
				</div>
			</div>


	{!! Form::close() !!}


@endsection