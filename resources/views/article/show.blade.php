@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1><u>Article {{ $article->id }}</u></h1>
            <h2>{{ $article->title }}</h2>
            <p class="lead">{{ $article->body }}</p>
                <span>{{ $article->auteur }}</span><br><br>
            <div class="buttons">
                <a href="{{ url('article/'. $article->id .'/edit') }}" class="btn btn-info">Modifier</a>
                <form action="{{ url('article/'. $article->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>


@endsection

<style>
    h1 {
        font-size: 45px;
    }
    h2 {
        font-size: 30px;
    }
    span {
        font-family: cursive;
        font-size: 25px;
        text-align: right;
    }
</style>