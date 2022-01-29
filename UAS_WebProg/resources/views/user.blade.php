@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center" style="margin-bottom:2%;">
    <div class="col-md-8">
<table class="table table-light table-striped" style="margin-left: 10%; margin-right: 200px; system-ui;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach($user as $user)
    <tr>
        <td>
        {{$user->name}}
        </td>
        <td>
        {{$user->email}}
        </td>
        <td>
          <a href="{{url('deleteuser/' . $user->id)}}"><button type="button" class="btn btn-outline-info">Delete</button></a>
        </td>
    </tr>
    @endforeach
         </tbody>
        </table>
    </div>
</div>
@endsection