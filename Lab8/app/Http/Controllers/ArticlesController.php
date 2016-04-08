<?php namespace App\Http\Controllers;
use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\UserModel;


class ArticlesController extends Controller {

    public function _construct(){
        $this->middleware('auth', ['except'=> 'index']);

    }

    public function index(){


        $articles = Article::latest('published_at')->published()->get();
        $latest = Article::latest()->first();
        return view('articles.index', compact('articles', 'latest'));
    }
    public function show(Article $article){

         return view('articles.show', compact('article'));
    }
    public function create(){
        $tags = Tag::lists('name','id');
        return view('articles.create', compact('tags'));
    }
    public function store(ArticleRequest $request){


//         new Article($request->all());
        $this->createArticle($request);



        flash('Your Article Has Been Created');

        return redirect('articles')->with('flash_message');

    }

    public function edit(Article $article){
        $tags=Tag::lists('name', 'id');

            return view('articles.edit', compact('article','tags'));
    }

public function update(Article $article, ArticleRequest $request)
{
    $article->update($request->all());
    $this->syncTags($article, $request->input('tag_list'));

    return redirect('articles');
}

    /**
     * @param Article $article
     * @param ArticleRequest $request
     */
    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    private function createArticle(ArticleRequest $request)
    {
        $article = \Auth::user()->articles()->create($request->all());
        $this->syncTags($article, $request->input('tag_list'));
        return $article;
    }

}
