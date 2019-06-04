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
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @include('package-front::blocks.129-content')
            </div>
            <div class="col-md-3">
                @include('package-front::blocks.1291-content')
            </div>
        </div>
    </div>
    @include('package-front::blocks.7-content')
@stop