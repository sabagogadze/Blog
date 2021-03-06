@extends('layouts.pages')
@section('content')
<div class="row">
	<div class="col-md-10">
		<h1>All Posts</h1>
	</div>
	<div class="col-md-2">
		<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary" id="createPost">Create new Post</a>
	</div>
	<div class="col-md-12">
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>Title</th>
				<th>Category</th>
				<th>Body</th>
				<th>Created At</th>
				<th>Edit/Delte</th>
			</thead>
			<tbody>
				@foreach ($posts as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td>{{ $post->category->name }}</td>
					<td>{{ substr($post->body, 0,50) }} {{ strlen($post->body) > 50 ?"...":"" }}</td>
					<td>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</td>
					<td>
						<a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a>
						<a href="{{ route('posts.edit', $post->id) }}" class=" btn btn-default btn-sm">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<select name="showpages" id="">
			<option value="50">5</option>
		</select>
		<div class="text-center">
		{!! $posts->links(); !!}
		</div>
	</div>
</div>
@endsection