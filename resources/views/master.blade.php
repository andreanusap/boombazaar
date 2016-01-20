<html>
<head>
    <title> @yield('title') </title>

<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
<!-- <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}"> -->
<!-- <script src="{!! asset('js/bootstrap.min.js') !!}"></script> -->
    <link href="/css/bootstrap-material-design.min.css" rel="stylesheet">
    <link href="/css/ripples.min.css" rel="stylesheet">
</head>
<body>

@include('shared.navbar')

@yield('content')

<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/jquery-2.2.0.js') !!}"></script>
<script src="/js/ripples.min.js"></script>
<script src="/js/material.min.js"></script>
<script>
    $(document).ready(function() {
        // This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script>
</body>
</html>