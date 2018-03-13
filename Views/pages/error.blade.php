@extends('package-front::layouts.foostart')
@section('title')
    Error page
@stop

<!--asset libs-->
@section('asset_lib')
    @foreach ($assets as $item)
        {!! $item !!}
    @endforeach
@stop



@section('content')
    @include('package-front::blocks.2034-content')
    @include('package-front::blocks.2009-content')
    @include('package-front::blocks.2000-content')
    @include('package-front::blocks.2044-content')

@stop