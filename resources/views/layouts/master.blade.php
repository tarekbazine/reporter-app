<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reporter</title>

    <link href="/css/app.css" rel="stylesheet">


</head>
<body>

@if( $flash = session('msg'))
    <div class="alert bg-teal" role="alert" style="position:fixed;
                                                z-index:10;
                                                bottom: 20px;
                                                right: 20px;
                                                -webkit-box-shadow: 0px 0px 11px -1px rgba(0,0,0,0.75);
                                                -moz-box-shadow: 0px 0px 11px -1px rgba(0,0,0,0.75);
                                                box-shadow: 0px 0px 11px -1px rgba(0,0,0,0.75);">
        <em class="fa fa-lg fa-check">&nbsp;</em>
        {{ $flash }}
        <a onclick="$(this).parent().remove()" class="pull-right">&nbsp;<em class="fa fa-lg fa-close"></em></a>
    </div>
@endif


    @include('layouts.header')

    @include('layouts.sidebar')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    @yield('content')

</div>    <!--/.main-->


    <script src="/js/app.js"></script>

    <script src="/js/min/moment.min.js"></script>
    <script src="/js/fr.js"></script>
    <script src="/js/chart.min.js"></script>
    <script src="/js/chart-data.js"></script>

    <script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/js/bootstrap-toggle.min.js"></script>


</body>
</html>