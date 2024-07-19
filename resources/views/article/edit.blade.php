@extends('layouts.app')


@section('content')


    <h1>Modifier article: {{ $article->titre }}</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('article/'. $article->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="titre">Titre:</label>
            <input type="text" class="form-control" id="titre" placeholder="Entrer titre" name="titre" value="{{ $article->titre }}">

        </div>

        <div class="form-group mb-3">

            <label for="content">Contenu actuel : </label>
            <textarea name="body" id="content" cols="30" rows="10" class="form-control">{{ $article->content }}</textarea>

        </div>

        <div class="form-group mb-3">

            <label for="auteur">Auteur : </label>
            <input type="text" class="form-control" id="auteur" placeholder="Entrer auteur" name="auteur" value="{{ $article->auteur }}">

        </div>


        <button type="submit" class="btn btn-primary">Sauvegarder mes modifications</button>

    </form>

@endsection