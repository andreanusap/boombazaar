<html>
<head>
    <title> @yield('title') </title>


<script src="{!! asset('js/jquery.min.js') !!}"></script>
<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
<link rel="stylesheet" type="text/css" href="{!! asset('css/flat-ui.min.css') !!}" >

<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</head>
<body>

@include('shared.navbar')

@yield('content')

<script>
    $(document).ready(function() {
        // This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script>
</body>
</html>