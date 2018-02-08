@extends('applayout')

@section('title')
	Create new Article
@endsection


@section('main_content')
	<div class="container">
	<h2>Create New Article</h2>

	<form method="POST">
		{{ csrf_field() }}
		  <div class="input-field col s12">
          <input type="text" name="title" class="validate">
          <label for="title">Title</label>
        </div>
        <div class="input-field col s12">
          <textarea name="content" class="materialize-textarea"></textarea>
          <label for="content">Desciption</label>
        </div>
        <div class="center-align"></div>
		<input type="submit" name="submit" value="Submit" class="btn blue">
	</form>
	</div>
@endsection