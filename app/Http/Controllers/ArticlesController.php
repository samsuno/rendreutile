<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Create a new article controller instance
     */
    public function __construct(){
        $this->middleware('auth', ['only'=>'create']);
        
    }
    /**
     * Show all articles
     * 
     * @return string all articles
     */
    public function index(){
        $articles = Article::latest('created_at')->get();
        return view('articles.index', compact('articles'));
    }
   /**
    * Show only one article
    * 
    * @param type $id
    * @return string one article
    */
    public function show($id) {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));     
    }
    /**
     * Show the page to create new article
     * 
     * @return Response
     */
    
    public function create() {
        $tags = Tag::lists('tag_name', 'id');
        return view('articles.create', compact('tags'));
    }
    
    /**
     * Save a new article
     * 
     * store new article in the database
     * @param ArticleRaquest $request
     * @return Response
     */
    public function store(ArticleRequest $request) {
        
        $this->createArticle($request);
        flash()->success('Votre don a été bien enregistré');
        return redirect('articles');
    }
    
    /**
     * Edit an existing article
     * 
     * @param Article $article
     * @return Response
     */
    public function edit($id) {
        $article = Article::findOrFail($id);
        $tags = Tag::lists('tag_name', 'id');
        return view('articles.edit', compact('article', 'tags'));
    }
    
    /**
     * Update an article
     * 
     * @param ArticleRequest $request
     * @param \App\Http\Requests\ArticleRequest $request
     * @return Response
     */
    public function update($id, ArticleRequest $request) {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        $this->syncTags($article, $request->input('taglist'));
        return redirect('articles');
    }
    
    /**
     * Sync up the list of tags in the database
     * 
     * @param \App\Http\Requests\ArticleRequest $request
     * @param \App\Article $article
     */
    private function syncTags(Article $article, Array $tags){
        
        $article->tags()->sync($tags);
    }
    
    /**
     * Create new article
     * 
     * @param \App\Http\Requests\ArticleRequest $request
     * @return article
     */
    private function createArticle(ArticleRequest $request){
               
        $request['url_image'] = 'default/url/path';
        $article = Auth::user()->articles()->create($request->all());
        $this->syncTags($article, $request->input('taglist'));
        return $article;
    }
  
}
