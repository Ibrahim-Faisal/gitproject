@extends('layouts.admin')



@section('content')

    <h1>Create Post</h1>

    <div class="row">

    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}

    {{csrf_field()}}

    <div class="form-group">

         {!! Form::label('title','Title:') !!}
         {!! Form::text('title',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

         {!! Form::label('category_id','Category:') !!}
         {!! Form::select('category_id',[''=>'Choose Option'] + $category,null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

         {!! Form::label('photo_id','Photo:') !!}
         {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

         {!! Form::label('content','Description:') !!}
         {!! Form::textarea('content',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

         {!! Form::submit('Create Post',['class'=>'btn btn-success']) !!}

    </div>

    {!! Form::close() !!}


    </div>


    <div class="row">

        @include('includes.form_error')

    </div>


@endsection