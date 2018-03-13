@extends('package-front::layouts.foostart')
@section('title')
    Faq page
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
                    @include('package-front::blocks.2050-content')
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    @include('package-front::blocks.2017-content')
                </div>
            </div>
        </div>
    </div>
    @include('package-front::blocks.2028-content')
    @include('package-front::blocks.2044-content')

@stop