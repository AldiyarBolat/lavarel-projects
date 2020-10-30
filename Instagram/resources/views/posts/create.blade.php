@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row pt-1">
            <h1 class="offset-5">Add New Post</h1>
        </div>

        <div class="row">
            <div class="col-8 offset-2 pt-4">
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-right">Post Caption</label>

                    <div class="col-md-6">
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">Post Image</label>
                    <input type="file" id="image" name="image" class="col-md-6 form-control-file">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row pt-1">
            <button class="offset-5 btn btn-primary">Add New Post</button>
        </div>
    </form> 


    
</div>
@endsection
