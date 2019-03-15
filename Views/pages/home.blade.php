@extends('package-front::layouts.foostart')
@section('title')
    Home page
@stop

<!--asset libs-->
@section('asset_lib')
    @foreach ($assets as $item)
        {!! $item !!}
    @endforeach
@stop



@section('content')
@stop