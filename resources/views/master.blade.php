<html>
<head>
    <title> @yield('title') </title>


<script src="{!! asset('js/jquery.min.js') !!}"></script>
<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
<<<<<<< HEAD
<link rel="stylesheet" type="text/css" href="{!! asset('css/flat-ui.min.css') !!}" >




<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
=======
<!-- <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}"> -->
<!-- <script src="{!! asset('js/bootstrap.min.js') !!}"></script> -->
    <link href="/css/bootstrap-material-design.min.css" rel="stylesheet">
    <link href="/css/ripples.min.css" rel="stylesheet">
>>>>>>> branch 'master' of https://github.com/riopurwanggono/boombazaar.git
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