<?php namespace App\Http\Controllers;
use App\Article;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\HttpResonse;
use App\Http\Controllers\Controller;





class ArticlesController extends Controller {

    public function index(){
        $articles = Article::latest('published_at')->published() -> get();

        return view('articles.index', compact('articles'));
    }
    public function show($id){
        $article = Article::findorFail($id);

         return view('articles.show', compact('article'));
    }
    public function create(){
        return view('articles.create');
    }
    public function store(CreateArticleRequest $request){

        Article::create($request->all());
        return redirect('articles');


    }

}
