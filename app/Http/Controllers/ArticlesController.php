<?php

namespace App\Http\Controllers;
use App\Http\Requests\ArticleFormRequest;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Articles;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Validator;
class ArticlesController extends Controller
{
   public function index()
   {
        $articles = Post::all();
        return view('pages.home')->withPost($articles);
   }

   public function show($id)
   {
		$article = Post::find($id);
		return view('posts.article')->withArticle($article); // resources/views/posts: article.blade.php
   }

   public function create()
   {
		return view('posts.create');
   }

   public function store(ArticleFormRequest $formRequest)
   {
   	    //dd(Input::get('content')); // die and dump -> in ra gia tri tra ve de test
        $title = $FormRequest->input('title');
        $content = $articleFormRequest->input('content');
        Post::create([
        	'title' =>  $title,
            'body'  =>  $content
        ]);
        return redirect()->route('article.index'); // tra ve route co ten la article.index trong web.php
   }

}
