@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1 style="margin-left: 30%;margin-bottom: 2%">Welcome {{auth()->user()->name}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
