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
    @include('package-front::blocks.2033-content')
    @include('package-front::blocks.2043-content')
    @include('package-front::blocks.2042-content')
    <div class="clearfix"></div>
    @include('package-front::blocks.2039-content')
    @include('package-front::blocks.2035-content')
    @include('package-front::blocks.2040-content')
    @include('package-front::blocks.2036-content')
    @include('package-front::blocks.2041-content')
    @include('package-front::blocks.2037-content')
    @include('package-front::blocks.2044-content')
@stop