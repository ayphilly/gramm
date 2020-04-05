@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf

        @method('patch')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Edit Profile </h2>
                </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">Post title</label>
                    
                        <input 
                            id="title"
                            name="title"
                            type="text"
                            class="form-control @error('title') is-invalid @enderror"
                            title="title" value="{{ old('title') ?? $user->profile->title }}"
                            autocomplete="title"
                            autofocus
                        >

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    </div>
                    
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">Description</label>
                    
                        <input 
                            id="description"
                            name="description"
                            type="text"
                            class="form-control @error('description') is-invalid @enderror"
                            title="description" value="{{ old('description') ?? $user->profile->description }}"
                            autocomplete="description"
                            autofocus
                        >

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label">URL</label>
                    
                        <input 
                            id="url"
                            name="url"
                            type="text"
                            class="form-control @error('url') is-invalid @enderror"
                            title="url" value="{{ old('url') ?? $user->profile->url }}"
                            autocomplete="url"
                            autofocus
                        >

                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                        <input class="form-control-file" type="file" name="image" id="image" >
        
                        @error('image')
                            
                                <strong>{{ $message }}</strong>
                            
                        @enderror
        
        
                    </div>
  
                    <div class="row  pt-3">
                        <button class="btn btn-primary">
                            Save
                        </button>
                    </div>                    
            </div>

            

        </div>  
   </form>
</div>
@endsection