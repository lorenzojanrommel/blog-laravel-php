<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;
use App\Article;

class CommentController extends Controller
{
	function storeComment(Request $request, $id){
    // $article = Article::find($id);
    // dd($id);
    $comment = new Comment();
    $comment->comment = $request->comment;
    $comment->article_id = $id;
    $comment->user_id = Auth::user()->id;
    $comment->save();
    return redirect('/articles');
    }
    // function showComment(){
    // 	$comments = Comment::all();
    // 	return view('articles/articles_list', compact('comments'));
    // }
}
