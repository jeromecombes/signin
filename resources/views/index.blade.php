@extends('layouts.md8')

@section('panel-heading')
@lang('general.welcome')
@endsection

@section('content')

{!! Form::open(array('route' => 'people.store', 'method' => 'POST', 'class' => 'form-horizontal')) !!}

<div class="form-group {!! $errors->has('lastname') ? 'has-error' : '' !!}">
    {!! Form::label('lastname', trans('general.lastname'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('lastname', old('lastname', isset($people->lastname) ? $people->lastname : null), ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('lastname', '<small class="help-block">:message</small>') !!}
    </div>
</div>

<div class="form-group {!! $errors->has('firstname') ? 'has-error' : '' !!}">
    {!! Form::label('firstname', trans('general.firstname'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('firstname', old('firstname', isset($people->firstname) ? $people->firstname : null), ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('firstname', '<small class="help-block">:message</small>') !!}
    </div>
</div>

<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
    {!! Form::label('email', trans('general.email'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-7">
        {!! Form::email('email', old('email', isset($people->email) ? $people->email : null), ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
    </div>
</div>

<div class='form-group'>
    <div class="col-md-12 center">
        {!! Form::submit(trans('general.submit'), ['class' => 'btn btn-primary']) !!}
        {!! Form::button(trans('general.cancel'), ['class' => 'btn btn-primary', 'onclick' => 'javascript:window.location.href = "/";']) !!}
    </div>
</div>



@endsection