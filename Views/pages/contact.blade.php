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
    @include('package-front::blocks.2034-content')
    @include('package-front::blocks.2038-content')
    @include('package-front::blocks.261-content')
    @include('package-front::blocks.1222-content')
    @include('package-front::blocks.859-content')
    @include('package-front::blocks.7-content')
@stop