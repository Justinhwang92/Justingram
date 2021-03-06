@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Indicate the path of the post, encryption type, and method -->
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <!-- Title text display -->
                <div class="row">
                    <h1>Add New Post</h1>
                </div>

                <div class="form-group row">
                    <!-- Caption text display -->
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    <!-- Input box -->
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name='caption' value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Post Image and file loader -->
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" , class="form-control-file" id="image" name="image">

                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <!-- Button -->
                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>

            </div>
        </div>
</div>
</form>
</div>
@endsection