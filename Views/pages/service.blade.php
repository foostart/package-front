@extends('package-front::layouts.foostart')
@section('title')
    Service page
@stop

<!--asset libs-->
@section('asset_lib')
    @foreach ($assets as $item)
        {!! $item !!}
    @endforeach
@stop



@section('content')
    @include('package-front::blocks.2034-content')
    @include('package-front::blocks.2026-content')
    @include('package-front::blocks.2033-content')
    @include('package-front::blocks.2024-content')
    @include('package-front::blocks.2044-content')

@stop