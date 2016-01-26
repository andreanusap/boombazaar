<html>
<head>
    <title> @yield('title') </title>


<script src="{!! asset('js/jquery.min.js') !!}"></script>
<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
<link rel="stylesheet" type="text/css" href="{!! asset('css/flat-ui.min.css') !!}" >
<link rel="stylesheet" type="text/css" href="{!! asset('css/datepicker.css') !!}">
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '852655574851808',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
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