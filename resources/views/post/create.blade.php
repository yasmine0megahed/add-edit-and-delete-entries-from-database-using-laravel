{{-- navbar  --}}
@extends('layouts.app')
@section('data')
     {{-- add data start --}}
<div class="container mt-4">

    <form method="POST" action="{{route('posts.index')}}">
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">title</label>
          <input type="text" name="title" class="form-control"  >
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">description</label>
            <textarea type="text" name="description" class="form-control" ></textarea>
          </div>

        {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">created by</label>
            <input type="text"  class="form-control"  >
          </div> --}}

        <button type="submit" class="btn btn-dark">Submit</button>
      </form>

</div>
{{-- add data end --}} 
@endsection

