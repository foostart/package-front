@extends('package-front::layouts.foostart')
@section('title')
    {!! $title !!}
@stop

<!--asset libs-->
@section('asset_lib')
    @foreach ($assets as $item)
        {!! $item !!}
    @endforeach
@stop



@section('content')
    @include('package-front::blocks.2034-content')
    @include('package-front::blocks.60-content')
    @include('package-front::blocks.7-content')
@stop