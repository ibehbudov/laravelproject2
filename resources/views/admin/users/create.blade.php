@extends('layouts.admin')

@section('content')
    <h1>Create user</h1>
    {!! Form::open([
        'method'    =>  'POST',
        'action'    =>  'AdminUsersController@store',
        'file'      =>  true
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
        ] , 1, ['class' => 'form-control']) !!}
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
        {!! Form::file('photo_id', ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Submit', ['class' =>  'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')

@endsection

