<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

    /**
     * @return $this
     */
    public function index()
    {
        $articles = Articles::latest('published_at')->published()->get();
        // $articles = Articles::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
        // $articles = Articles::latest()->get();
        // $articles = Articles::order_by('published_at', 'desc')->get();
        $articles = Articles::all();

        return view('pages.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Articles::findOrFail($id);

        return view('pages.show', compact('article'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Requests\CreateArticlesRequest $request)
    {
        Articles::create($request->all());

        return redirect('articles');
    }
}
