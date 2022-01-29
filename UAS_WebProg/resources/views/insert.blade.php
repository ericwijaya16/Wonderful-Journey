@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-size: 30px;">{{ __('Insert Blog Detail') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/createblog') }}" enctype="multipart/form-data">
                    @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title : ') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter title">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category : ') }}</label>

                            <div class="col-md-6">
                                <select id="category" type="email" class="form-control" name="category" value="{{ old('category') }}">
                                    @foreach($categories as $categories)
                                    <option value="{{$categories->id}}">
                                        {{$categories->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="imageArticle" class="col-md-4 col-form-label text-md-right">{{ __('Image : ') }}</label>

                            <div class="col-md-6">
                                <input id="imageArticle" type="file" name="imageArticle">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Story : ') }}</label>

                            <div class="col-md-6">
                                <textarea id="desciption" rows="6" class="form-control @error('description') is-invalid @enderror form-content" name="description">
                                </textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" value ="Create">
                                    {{ __('Upload Blog') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
