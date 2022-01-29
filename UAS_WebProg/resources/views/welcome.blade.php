@extends('layouts.app')
@section('content')



<div class="container pt-2">
    <div class="row">
        @foreach($article as $article)
            <div class="card" style="width: 20rem; margin-bottom:10%; margin-left: 10%; font-family: system-ui;">
            <a href="{{ url('detail/'. $article->id) }}" class="card-link text-white">
                <div class="card-body">
                    <h4 class="card-title" style="color: black">{{ $article->title }}</h4>
                        <p class="card-text" style="color: black">{{ Str::limit($article->description, 100) }} </p>
                        <p style="color: blue"> Full Story</p>
                        @if($article->category_id === 1)
                        <p style="color: black">Category :</p>
                        <a href="{{url('category',1)}}">Beach</a>
                        @endif
                        @if($article->category_id === 2)
                        <p style="color: black">Category :</p>
                        <a href="{{url('category',2)}}">Mountain</a>
                        @endif
                        @if($article->category_id === 3)
                        <p style="color: black">Category :</p>
                        <a href="{{url('category',3)}}">Lake</a>
                        @endif
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>



@endsection