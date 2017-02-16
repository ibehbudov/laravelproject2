@extends('layouts.admin')

@section('content')
    <h1>Create user</h1>
    {!! Form::open([
        'method'    =>  'POST',
        'action'    =>  'AdminUsersController@store'
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
        {!! Form::label('status', 'Status') !!}
        {!! Form::select('active', [
                        0 => 'Deactive',
                        1 => 'Active'
        ] , 1, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['placeholder' => '********', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('repassword', 'RePassword') !!}
        {!! Form::password('repassword', ['placeholder' => '********', 'class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Submit', ['class' =>  'btn btn-primary']) !!}
    </div>

@endsection

