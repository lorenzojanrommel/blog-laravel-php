@extends('applayout')

@section('title')
	{{$article->title}}
@endsection
@section('main_content')
	<div class="container">
		<h3>{{$article->title}}</h3>
		<p>{{$article->content}}</p>
		<a href='{{url("articles/$article->id/edit")}}'><button class="btn green darken-4">Edit this article</button></a>
	</div>
@endsection