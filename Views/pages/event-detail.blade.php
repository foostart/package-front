@extends('package-front::layouts.foostart')
@section('title')
    Event detail page
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
    @include('package-front::blocks.2046-content')
    @include('package-front::blocks.2029-content')
    @include('package-front::blocks.2030-content')
    @include('package-front::blocks.2028-content')
    @include('package-front::blocks.2044-content')

@stop