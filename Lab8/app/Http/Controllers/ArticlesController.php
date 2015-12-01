<?php namespace App\Http\Controllers;
use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ArticlesController extends Controller {

    public function _construct(){
        $this->middleware('auth', ['except'=> 'index']);

    }

    public function index(){


        $articles = Article::latest('published_at')->published() -> get();

        return view('articles.index', compact('articles'));
    }
    public function show(Article $article){

         return view('articles.show', compact('article'));
    }
    public function create(){
        return view('articles.create');
    }
    public function store(ArticleRequest $request){

        $article = new Article($request->all());

        \Auth::user()->articles()->save($article);
        return redirect('articles');

    }

    public function edit(Article $article){
            return view('articles.edit', compact('article'));
    }
public function update(Article $article, ArticleRequest $request)
{
    $article->update($request->all());

    return redirect('articles');
}

}
