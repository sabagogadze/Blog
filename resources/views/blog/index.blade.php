@extends('layouts.pages')
@section('title', "|Blogs")
@section('active_blog', 'active')
@section('content')
	<div class="row">
		<h1 class="col-md-8 col-md-offset-2">Blogs</h1>
		<div class="col-md-8 col-md-offset-2">
			@foreach ($posts as $post)
				<div class="post">
                    <h3>{{ $post->title }}</h3>
                    <h5>Published: {{ date('M j, Y H:i', strtotime($post->created_at)) }}</h5>
                    <p>{{ substr($post->body, 0,200) }} {{ strlen($post->body) > 200 ?"...":"" }}</p>
                    <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read more</a>
                </div>
                <hr>
			@endforeach
		</div>
	</div>
	<div class="text-center">
		{{ $posts->links() }}
	</div>
@endsection