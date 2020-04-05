@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
            <img
                alt="freecodecamp's profile picture"
                style="border-radius: 100px; width:100; height:100;"
                class="rounded-circle" 
                src="{{ $user->profile->Profileimage() }}"
            >
       </div>

       <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"> 
                <div class="d-flex align-items-center">
                    <div class="h4" style="font-size:25px">{{ $user->username}}</div>
                    <button class="btn btn-primary ml-4" > Follow </button>
                </div>
                
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>                    
                @endcan
                
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Prost</a>                
            @endcan
            
            <div class="d-flex">
                <div class="pr-4"><strong>{{$user->posts()->count()}}</strong> posts</div>
                <div class="pr-4"><strong>23k</strong> Followers </div>
                <div class="pr-4"><strong>212</strong> Following</div>
            </div>
            <div class="pt-2 font-weight-bold">
                {{$user->profile->title}}
            </div>
            <div>
                {{$user->profile->description}}
            </div>
            <div>
                <a href="#"><strong>{{$user->profile->url ?? 'Freecodecamp.org'}}</strong></a>
            </div>

        </div>

   </div>

   <div class="row pt-3 ">
      @foreach ( $user->posts as $post)
        <div class="col-4 pb-3">
        <a href="/p/{{ $post->id}}">
                <img alt="new" class="w-100" src="/storage/{{ $post->image }} ">
            </a>
            
        </div>
      @endforeach

      

     
   </div>
  
</div>
@endsection