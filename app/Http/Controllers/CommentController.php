<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentController extends Controller
{
	public function index()
	{
		$comments = Comment::latest()->get();
		return view('comments', compact('comments'));
	}

    public function store()
    {
    	Comment::create(request()->validate([
    		'author' => 'required',
    		'text' => 'required'
    	]));

    	return $this->index();
    }
}
