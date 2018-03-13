@extends('package-front::layouts.foostart')
@section('title')
    About page
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
    @include('package-front::blocks.2014-content')
    @include('package-front::blocks.2035-content')
    <div class="bg-color" style="background-color: #eeeeee !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    @include('package-front::blocks.2015-content')
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    @include('package-front::blocks.2049-content')
                </div>
            </div>
        </div>
    </div>
    @include('package-front::blocks.2024-content')
    @include('package-front::blocks.2016-content')
    @include('package-front::blocks.2044-content')

@stop