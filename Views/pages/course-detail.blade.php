@extends('package-front::layouts.foostart')
@section('title')
    Course detail page
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
    @include('package-front::blocks.2045-content')
    <div class="bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    @include('package-front::blocks.2031-content')
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    @include('package-front::blocks.2032-content')
                </div>
            </div>
        </div>
    </div>
    @include('package-front::blocks.2028-content')
    @include('package-front::blocks.2044-content')

@stop