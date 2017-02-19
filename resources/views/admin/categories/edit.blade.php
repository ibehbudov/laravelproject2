@extends('layouts.admin')


@section('content')
    <h1>Categories</h1>
    <div class="col-sm-6">
        {!! Form::model($category, [
            'method'    =>  'PATCH',
            'action'    =>  ['AdminCategoriesController@update', $category->id]
        ]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Category') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Update post', ['class' => 'btn btn-primary col-sm-6']) !!}

        {!! Form::close() !!}

        {!! Form::open([
            'method'    =>  'DELETE',
            'action'    =>  ['AdminCategoriesController@destroy', $category->id]
        ]) !!}

        {!! Form::submit('Delete Post', ['class' => 'btn btn-danger col-sm-6']) !!}

        {!! Form::close() !!}

        @if(Session::has('updated_message'))
            <div class="alert alert-success form-group">
                {{Session::get('updated_message')}}
            </div>
        @endif

        @include('includes.form_error')

    </div>

    <div class="col-xs-6">
        @if(count($categories) > 0)
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection