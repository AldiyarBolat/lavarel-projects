@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')

        <div class="row pt-1">
            <h1 class="offset-5">Edit Profile</h1>
        </div>

        <div class="row">
            <div class="col-8 offset-2 pt-4">
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">New title</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2 pt-4">
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">New Description</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2 pt-4">
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label text-md-right">New Url</label>

                    <div class="col-md-6">
                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

                        @error('url')
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
                    <label for="image" class="col-md-4 col-form-label text-md-right">New Profile Image</label>
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
            <button class="offset-5 btn btn-primary">Edit</button>
        </div>
    </form> 


    
</div>
@endsection
