<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use  App\Http\Controllers\ArticleController;
use  App\Models\Article;
class controllerApp extends Controller{
    //
 private $app_name;
 private $article;

     public function index(){// vue accueil 
        $this->app_name = "Magazine Virtuel";
        $var = $this->transform($this->getting_data());
      
        return view("index", ['appname'=>$this->app_name, 'data'=>$this->getting_data()]);
    }
   
private function getting_data(){
    
    $this->article = new Article();
     return   $this->article->get();// DB::select('select * from article');
}
    public function post_article(){
        return view("ajout_article", ['name'=>"ajout article"]);
    }
     public function single(){
        return view("blog-single");
    }
    public function add_article(Request $request){
      $article = new ArticleController();
      $data = $article->store($request);
    
      return $request;
    }
    public function login(){
        return view("login", ['name'=>"login"]);
    }
    public function categorie(){
        return view("category");
    }
    public function about(){
        return view("about");
    }
    public function contact(){
        return view("contact");
    }
   
}
