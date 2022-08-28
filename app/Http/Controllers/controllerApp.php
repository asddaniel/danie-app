<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use  App\Http\Controllers\ArticleController;
use  App\Models\Article;
use App\Mail\Testmail;
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
     return   $this->article->get();
}
    public function post_article(){
        if(!Gate::allows("access-admin")){
            abort("403");
        }
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
    public function mail(){
           Mail::to("devasddaniel@gmail.com")->send(new Testmail());
           return "mail envoyé";
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
    private function transform($data){
        $donnees = array();
       foreach ($data as $key => $value) {
           array_push($donnees, $value);
       }
       return $donnees;
    }
}
