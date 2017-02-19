@extends('layouts.admin')

@section('content')

    <h1>Create posts</h1>

    {!! Form::model($post, [
        'method'    =>  'PATCH',
        'action'    =>  ['AdminPostsController@update', $post->id],
        'files'     =>  true
    ]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category') !!}
        {!! Form::select('category_id', $categories , null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo') !!}
        {!! Form::file('photo_id', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Post', ['class' => 'btn btn-success col-sm-6']); !!}
    </div>

    {!! Form::close() !!}


    {!! Form::open([
        'method'    =>  'DELETE',
        'action'    =>  ['AdminPostsController@destroy', $post->id]
    ]) !!}

    {!! Form::submit('Delete Post' , ['class' => 'btn btn-danger col-sm-6']) !!}

    {!! Form::close() !!}

    @include('includes.form_error')

@endsection

