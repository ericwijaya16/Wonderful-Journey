@extends('layouts.app')

@section('content')
<div class="box">
          <h1>{{$article->title}}</h1>
          <br>
          <img class = "card-img-top" src="{{$article->image}}" alt="">
          <p>{{$article->description}}</p>     
          <button onclick="goBack()"class="btn btn-outline-info">Go Back</button>
          <script> function goBack() {
            window.history.back();
            }
        </script>
    </div>

<style>
.box{
  width: 620px;
  height: 420px;
  background: #fff;
  color: #000;
  position: absolute;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding: 70px 30px;
  margin-left: 48%;
  margin-top: 10%;
}
</style>
@endsection