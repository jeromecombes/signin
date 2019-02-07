@extends('layouts.md8')

@section('panel-heading')
@lang('general.thanks')
@endsection

@section('content')
@lang('general.signin_ok')

<div>
{!! Form::button(trans('general.back'), ['class' => 'btn btn-primary', 'onclick' => 'javascript:window.location.href = "/";']) !!}
</div>
@endsection