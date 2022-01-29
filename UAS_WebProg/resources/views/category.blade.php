@extends('layouts.app')

@section('content')
<div class="container pt-2">
    <h2>{{ $categorie->name }}</h2>
    <br>
    <br>
    <div class="row">
        @foreach($article as $article)
            <div class="card" style="width: 20rem; margin-bottom:10%; margin-left: 10%; font-family: system-ui;">
            <a href="{{ url('detail/'. $article->id) }}" class="card-link text-white">
                <div class="card-body">
                    <h4 class="card-title" style="color: black">{{ $article->title }}</h4>
                        <p class="card-text" style="color: black">{{ Str::limit($article->description, 100) }} </p>
                        <p style="color: blue"> Full Story</p>
                    </div>
                </div>
                </a>
        @endforeach
    </div>
</div>

@endsection