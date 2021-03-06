@extends('layouts.admin')


@section('content')

    @if(Session::has('deleted_user'))

        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{session('deleted_user')}}</strong>
        </div>

    @endif

    <h1>Users</h1>

    <table class="table table-hover table-striped">

        <thead>

        <tr>

            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created_at</th>
            <th>Updated_at</th>

        </tr>

        </thead>

        <tbody>

        @if($users)

            @foreach($users as $user)

                <tr>

                    <td>{{$user->id}}</td>
                    <td><img height="50" width="50" src="{{$user->photo ? $user->photo->file : '../images/user.png'}}" alt=""></td>
                    <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>

                </tr>

            @endforeach

        @endif

        </tbody>

    </table>

@endsection