<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public static function index(){
//        return auth()->user();

        $re->session()->flash('status', 'Task was successful!');

        return $re->all();

        $articles = Article::all();


        return view('article.index', ['articles' => $articles]);
    }

    public static function show($id){
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }
    public static function create(){

        return view('article.create');
    }
    public function store(Request $request){
        $this->validate($request , [
            'title' => 'unique:articles|required',
            'body' => 'required',
            'description' => 'required'
        ]);

        $article = Article::create([
            'title' => $request['title'],
            'body' => $request['body'],
            'dec' => $request['description']

        ]);
//        return $article;

        return redirect(route('article.show', ['id'=> $article->id]));

//        }elseif (Auth::check() == 0){
            return redirect(route('article.index'));
//        }


    }
}