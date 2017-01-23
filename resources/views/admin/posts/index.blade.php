@extends('layouts.admin')

@section('content')

    <h1>All Post</h1>


    <table class="table table-hover table-striped">

            <thead>

                <tr>

                    <th>Id</th>
                    <th>User</th>
                    <th>Category</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>

                </tr>

            </thead>

            <tbody>

            @if($posts)

                @foreach($posts as $post)

                    <tr>

                        <td>{{$post->id}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                        <td><img height="50" src="{{$post->photo ? $post->photo->file : '../images/user.png'}}" alt=""></td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>


                    </tr>

                @endforeach

            @endif

            </tbody>

        </table>

@endsection