@extends('layouts.app')

@section ('content')
<div class="container">

    <div class="row justify-content-center" style="margin-bottom:2%; margin-right:25%; margin-left:20%">
    <div class="col-md-8">
<table class="table table-light table-striped" style="margin-left: 10%; system-ui;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach($articles as $articles)
    <tr>
        <td>
        {{$articles->title}}
        </td>
        <td>
          <a href="{{url('deletearticle/' . $articles->id)}}"><button type="button" class="btn btn-outline-info">Delete</button></a>
        </td>
    </tr>
    @endforeach
         </tbody>
        </table>
        <a href="{{url('insert/')}}"><button type="button" class="btn btn-outline-secondary" style="color:blue ; margin-left: 10%"> + Create Blog</button></a>
    </div>
</div>

@endsection