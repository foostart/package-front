<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=100" />
    <meta http-equiv="REFRESH" content="1800" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="Tai lieu web" />
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">

    <link rel="shortcut icon" href="blocks/2034/images/favicon.ico"/>

    @include('package-front::layouts.partials.meta-og')
    @include('package-front::layouts.partials.meta-fb')
    @include('package-front::layouts.partials.meta-twitter')

    {!! HTML::style('packages/foostart/package-front/css/bootstrap-3.3.7.min.css') !!}
    {!! HTML::style('packages/foostart/package-front/css/font-awesome-4.7.0.min.css') !!}

    {!! HTML::script('packages/foostart/package-front/js/jquery-2.2.4.min.js') !!}
    {!! HTML::script('packages/foostart/package-front/js/bootstrap-3.3.7.min.js') !!}

    @yield('asset_lib')
    @yield('header_css')
    @yield('header_js')

</head>

    <body>

        <div class='foostart-content'>

            @yield('content')

        </div>

        @yield('footer_js')

    </body>
</html>