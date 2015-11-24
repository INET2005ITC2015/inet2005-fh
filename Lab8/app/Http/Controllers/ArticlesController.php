<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
use Request;



class ArticlesController extends Controller {

    public function index(){
        $articles = Article::latest('published_at')->get();

        return view('articles.index', compact('articles'));
    }
    public function show($id){
        $article = Article::find($id);
        if($article== 'null'){
            abort(404);
        }

         return view('articles.show', compact('article'));
    }
    public function create(){
        return view('articles.create');
    }
    public function store(){

        Article::create(Request::all());
        return redirect('articles');
    }

}
