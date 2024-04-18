{{-- navbar  --}}
@extends('layouts.app')
@section('data')
    {{-- add data button --}}
    <div class="text-center my-4">
        <a href="{{route('posts.create')}}" class="btn btn-dark">create a post</a>
    </div>
    {{-- table start --}}
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    {{-- <th scope="col">posted by</th>
                    <th scope="col">created at</th> --}}
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($allposts as $post)
                    <tr>
                        <td>{{ $post->id}}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        {{-- <td>{{ $post['post_by'] }}</td>
                        <td>{{ $post['cteated_at'] }}</td> --}}
                        <td class="d-flex ">
                            <a href="{{route('posts.show',['id'=>$post->id])}}" class="btn btn-light ">view</a>
                            <a href="{{route('posts.edit',['id'=>$post->id])}}" class="btn btn-primary">edit</a>
                            <form method="POST" action="{{route('posts.destroy',['id'=>$post->id])}}">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="delete" class="btn btn-danger ">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    {{-- table end --}}

@endsection
