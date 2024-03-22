@extends('layouts.master')

@section('head')
<link href="{{ asset('css/posts.css') }}" rel="stylesheet">
@endsection

@section('content')

<section class="posts-page-section">
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron header-section-posts">
                <div class="bg-header-posts"></div>
                <div class="header-posts-content">
                    <h1 class="display-4">Post</h1>
                    <a class="btn btn-success" href="{{route('posts.index')}}">All Posts</a>
                </div>
            </div>
        </div>
        </div>

    <div class="row">
        <div class="col">
            <div class="card card-post" style="">
                <img class="card-img-top" src="/{{$post->photo}}" alt="{{$post->photo}}">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    <p class="card-text"> Created at: {{$post->created_at->diffForHumans()}}</p>
                    <p class="card-text">Last Modefied: {{$post->updated_at->diffForHumans()}}</p>
                        @foreach ($tags as $tag)
                        <a class="text-primary" href="{{route('tags.posts',$tag->id)}}">{{$tag->tag}}-</a>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
