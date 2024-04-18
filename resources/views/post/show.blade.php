@extends('layouts.app')
@section('data')
<div class="container">
    <div class="card">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->description}}</p>
          <a href="{{route('posts.index')}}" class="btn btn-primary">Go back</a>
        </div>
      </div>
</div>
@endsection