@extends('gatekeeper::layouts.default')

@section('styles')
@stop

@section('content')
@include('gatekeeper::groups.list')
{!! $groups !!}
@endsection

@section('scripts')
@stop