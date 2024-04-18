@extends('layouts.app')
@section('data')
{{-- edit data start --}}
<div class="container mt-4">

    <form method="POST" action="{{route('posts.update',['id'=>$post->id])}}">
        @method('PUT')
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">title</label>
          <input type="text" name="title" class="form-control"  value="{{$post->title}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">description</label>
            <textarea type="text" name="description" class="form-control" >{{$post->description}}</textarea>
          </div>

        <button type="submit" class="btn btn-dark">update</button>
      </form>

</div>
{{-- edit data end --}} 


@endsection