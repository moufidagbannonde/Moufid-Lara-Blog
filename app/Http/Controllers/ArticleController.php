<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{

    /**
     * Affiche la liste des articles
     */
    public function index()
    {

        $articles = Article::all();
        return view('article.index', compact('articles'));

    }


    /**
     * return le formulaire de création d'un article
     */
    public function create()
    {

        return view('article.create');

    }


    /**
     * Enregistrer un nouvel article dans la base de données
     */
    public function store(Request $request)
    {




        $article = Article::all();
        $article->title = $request->get('titre');
        $article->body = $request->get('body');
        $article->auteur = $request->get('auteur');
        // $article->create($request->all());

        // dd($request->all());
        // $art = Article::create($request->all());
        // dd($art);

        // $article = Article::create($request->all)([
        //     'title' => $request->get('title'),
        //     'body' => $request->get('content'),
        //     'auteur' => $request->get('author')
        // ]);
        // $article->save($request->all());


        // Article::findOrFail(46)->update(['title' => 'bonsoir']);
        return view('article.index')->with('success', 'article ajouté avec succès');


        //  Article::create($request->all());

        //  return redirect('/')->route('article.index')->with('success', 'Article créé avec succès !');
        //  [
        //     'title' => $request->get('titre'),
        //     'body' => $request->get('content'),
        //     'auteur' => $request->get('auteur')
        // ]);
        // $article->
        // $article->
        // $article->
        //     'title' => $request->get('titre'),
        //     'body' => $request->get('body'),
        //     'auteur' => $request->get('auteur')
        // ]);

        // $article->save($request->all());
        // return redirect('/')->with('success', 'article Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un article spécifique
     */

    public function show($id)
    {

        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));

    }


    /**
     * Retourner le formulaire de modification
     */

    public function edit($id)
    {

        $article = Article::findOrFail($id);

        return view('article.edit', compact('article'));

    }


    /**
     * Enregistrer la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'titre' => 'required',
            'body' => 'required',
            'auteur' => 'required'

        ]);




        $article = Article::findOrFail($id);
        $article->title = $request->get('titre');
        $article->body = $request->get('body');
        $article->auteur = $request->get('auteur');
        $article->save($request->all());

        // Article::findOrFail(46)->update(['title' => 'bonsoir']);
        return redirect('/')->with('success', 'article Modifié avec succès');

    }




    /**
     * Supprime le article dans la base de données
     */
    public function destroy($id)
    {

        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/')->with('success', 'article Supprimé avec succès');

    }
}
