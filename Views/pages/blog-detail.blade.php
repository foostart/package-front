@extends('package-front::layouts.foostart')
@section('title')
    Blog detail page
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
    <div class="bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    @include('package-front::blocks.2006-content')
                    @include('package-front::blocks.2047-content')
                    @include('package-front::blocks.2025-content')
                    @include('package-front::blocks.2048-content')
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    @include('package-front::blocks.2017-content')
                    @include('package-front::blocks.2019-content')
                    @include('package-front::blocks.2020-content')
                    @include('package-front::blocks.2021-content')
                </div>
            </div>
        </div>
    </div>
    @include('package-front::blocks.2028-content')
    @include('package-front::blocks.2044-content')

@stop