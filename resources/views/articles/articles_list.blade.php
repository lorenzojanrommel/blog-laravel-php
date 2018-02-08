@extends('applayout')

@section('title')
	Articles List
@endsection

@section('main_content')
	<div class="container">
<h2>
	<a href="{{url('articles/create')}}" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">add</i></a>
</h2>
<h3 class="center">List of articles</h3>
	@foreach($articles as $article)
		<ul class="collapsible" data-collapsible="expandable">
				 	<li>
				      <div class="collapsible-header">{{$article->title}} ----> Created by: {{$article->user->name}}</div>
				      <div class="collapsible-body">
				      	<h5>Description</h5>
				      	<strong>{{$article->content}}</strong>
				      	<br>
				      	<span>
				      		<a href='{{url("articles/$article->id")}}'><button class="btn yellow darken-4">Edit</button></a>
				      		<a href='{{url("articles/$article->id/delete")}}'><button class="btn red">Delete this article</button></a>
					    </span>
				      	<form method="POST"  action="articles/{{$article->id}}">
				      		{{ csrf_field() }}
					        <div class="input-field">

					          <i class="material-icons prefix">mode_edit</i>
					          <textarea name="comment" class="materialize-textarea"></textarea>
					          <label for="icon_prefix2">Comment</label>
					           <button class="btn waves-effect waves-light" name="action">Submit
    							<i class="material-icons right">send</i>
 							 	</button>
 							 	<h3>Comments:</h3>
 							 	<ul>
 							 	@foreach($article->comment as $comment)
 							 	<li>{{$comment->comment}} by {{$comment->user->name}}</li>
 							 	<li><small>{{$comment->updated_at->diffForHumans()}}</small></li>
 							 	<hr>
 							 	@endforeach
 							 	</ul>
					        </div>
					    </form>
				      </div>
				    </li>
{{-- 				<td><a href='{{url("articles/$article->id")}}'><button class="btn yellow darken-4">Edit</button></a></td>
				<td>
		<a href='{{url("articles/$article->id/delete")}}'><button class="btn red">Delete this article</button></a>
				</td> --}}
	@endforeach
@endsection
</div>