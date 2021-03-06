@extends('layouts.admin')

@section('content')
    <h1>Create user</h1>
    <div class="row">

        <div class="col-sm-3">
            <img height="140" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded ">
        </div>
        <div class="col-sm-9">
        {!! Form::model($user, [
            'method'    =>  'PATCH',
            'action'    =>  ['AdminUsersController@update', $user->id],
            'files'     =>  true
        ]) !!}

        <div class="form-group">
            {!! Form::label('username', 'Username') !!}
            {!! Form::text('name', null, [
                                    'placeholder'   =>  'name and surname',
                                    'class'         =>  'form-control'
            ]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, [
                                    'placeholder'   =>  'example@mail.com',
                                    'class'         =>  'form-control'
            ]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Role') !!}
            {!! Form::select('role_id', ['' => 'Choose role...'] + $roles ,null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_active', 'Status') !!}
            {!! Form::select('is_active', [
                            0 => 'Deactive',
                            1 => 'Active'
            ] , null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['placeholder' => '********', 'class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirm Password') !!}
            {!! Form::password('password_confirmation', ['placeholder' => '********', 'class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo', 'User Photo') !!}
            {!! Form::file('photo', ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Submit', ['class' =>  'btn btn-primary pull-left']) !!}

        {!! Form::close() !!}

            {!! Form::open([
                    'method'    =>  'DELETE',
                    'action'    =>  ['AdminUsersController@destroy', $user->id]
            ]) !!}

            {!! Form::submit('Delete', ['class'     =>  'btn btn-danger pull-right']) !!}
            {!! Form::close() !!}

        </div>

        </div>
    </div>

    @include('includes.form_error')

@endsection