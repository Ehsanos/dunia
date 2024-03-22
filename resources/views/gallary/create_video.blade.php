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
                    <h1 class="display-4">Add Video</h1>
                
                    <a class="btn btn-success" href="#">All Videos</a>
                </div>
                @if (Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif

            </div>
        </div>
    </div>


    <div class="row">

        @if ($errors->all())
            <ul class="text-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <div class="col">
            <form action="{{route('promo-vid.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Youtube Link</label>
                    <input type="text" name="link" class="form-control" required autofocus>
                </div>
                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>


</div>
</section>
@endsection
