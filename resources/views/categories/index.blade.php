@extends('layouts.pages');
@section('title', '| Categories')
@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route'=>'categories.store']) !!}
					<h2>New Category</h2>
					{!! Form::label('name', 'name:') !!}
					{!! Form::text('name', null, ['class'=>'form-control']) !!}<br>
					{!! Form::submit('Create New Category', ['class'=>'btn btn-primery btn-block btn-h1-spacing']) !!}	
				{!! Form::close() !!}	
			</div>
		</div>
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Edit </th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($categories as $category)
			
					<tr>
						<td>{{ $category->name }}</td>
						<td><a href="{{ route('categories.edit', $category->id) }}" class=" btn btn-default btn-sm">Edit</a> </td>
						<td>{{-- {!! Form::model($category, array('route' => array('categories.destroy', $category->id), 'files' => true, 'method' => 'DELETE')) !!}﻿
					{!! Form::submit('DELETE', ['class'=>"btn btn-danger "]) !!}

					{!! Form::close() !!}  --}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
		
	</div>
@endsection