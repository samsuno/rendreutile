<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
//use Illuminate\Support\Facades\Request

class ArticlesController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only'=>'create']);
        
    }
    /**
     * 
     * @return string all articles
     */
    public function index(){
        $articles = Article::latest('created_at')->get();
        return view('articles.index', compact('articles'));
    }
   /**
    * 
    * @param type $id
    * @return string one article
    */
    public function show($id) {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
        
    }
    /**
     * 
     * @return type
     */
    
    public function create() {
        return view('articles.create');
    }
    
    /**
     * store new article in the database
     * @return type
     */
    public function store(ArticleRequest $request) {
       
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);
       $request['url_image'] = 'default/url/path';
      // Article::create($request->all());
       return redirect('articles');
    }
    
    public function edit($id) {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    
    public function update($id, ArticleRequest $request) {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
  
}
