<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class ArticleController extends AdminController
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::paginate(20);
        return view('admin.articles.index', compact('articles'))->layout('layouts.app');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $request->validate([
        'title' => 'required',
        'discription' => 'required',
        'slug' => 'required',
        'language' => 'required',
        'body' => 'required',
        'image' => 'required',
        'status' => 'required',
        ]);

            $path = '/images/article/';
            $image = $this->uploder($request->image,$path);
            $imagepath = $path.$image;


        Article::create([

            'user_id' => auth()->user()->id,
            'title' => $request['title'],
            'discription' => $request['discription'],
            'slug' => $request['slug'],
            'language' => $request['language'],
            'body' => $request['body'],
            'status' => $request['status'],
            'seotitle' => $request['seotitle'],
            'opengraphtitle' => $request['opengraphtitle'],
            'seodescription' => $request['seodescription'],
            'opengraphdescription' => $request['opengraphdescription'],
            'image' => $imagepath,
        ]);


        return redirect(route('articles.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($article)
    {

        $article = Article::where('slug', $article)->first();
        return view('admin.articles.edit', compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $articles)
    {
        $article = Article::where('slug', $articles)->first();
        $request->validate([
            'body'=>'required',
            'discription'=>'required',
             'title'=>'required',
            //  'image'=>'required',

         ]);
         $oldimage = $article->image;

         if (!$request->image) {

            $article->user_id = auth()->user()->id;
            $article->title  = $request->title;
            $article->discription = $request->discription;
            $article->slug = $request->slug;
            $article->language = $request->language;
            $article->body = $request->body;
            $article->status =  $request->status;

            $article->seotitle = $request->seotitle;
            $article->opengraphtitle = $request->opengraphtitle;
            $article->seodescription = $request->seodescription;
            $article->opengraphdescription =  $request->opengraphdescription;

            $article->image=$oldimage;
            $article->save();

            return redirect(route('articles.index'));
        }else {
            $article->user_id = auth()->user()->id;
            $article->title  = $request->title;
            $article->discription = $request->discription;
            $article->slug = $request->slug;
            $article->language = $request->language;
            $article->body = $request->body;
            $article->status =  $request->status;

            $article->seotitle = $request->seotitle;
            $article->opengraphtitle = $request->opengraphtitle;
            $article->seodescription = $request->seodescription;
            $article->opengraphdescription =  $request->opengraphdescription;

            $path='/images/article/';
            $image=$this->uploder($request->image,$path);
            $imagepath=$path.$image;
            $article->image=$imagepath;
            $article->save();

            return redirect(route('articles.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($article)
    {

        $article = Article::where('slug', $article)->first();

        $article->delete();

        return redirect(route('articles.index'));

    }
}
