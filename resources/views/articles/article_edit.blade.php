@extends('applayout')

@section('title')
	Edit Article
@endsection


@section('main_content')
	<div class="container">
	<h2>Edit Article</h2>

	<form method="POST">
		{{ csrf_field() }}
		Title : <input type="text" name="title" value="{{ $article->title}}"> <br>
		Description: <textarea name="content">{{$article->content}}</textarea> </br>
		<input type="submit" name="submit" value="Submit">

	</form>
	</div>
@endsection