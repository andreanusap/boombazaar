<html>
<head>
    <title> @yield('title') </title>

<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
<link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</head>
<body>

@include('shared.navbar')

@yield('content')

</body>
</html>