@extends('package-front::layouts.foostart')
@section('title')
    Event page
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
    @include('package-front::blocks.2027-content')
    @include('package-front::blocks.2028-content')
    @include('package-front::blocks.2044-content')

@stop