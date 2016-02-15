<html>
<head>
    <title> @yield('title') </title>




<script src="{!! asset('js/jquery.min.js') !!}"></script>
<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
<link rel="stylesheet" type="text/css" href="{!! asset('css/flat-ui.min.css') !!}" >
<link rel="stylesheet" type="text/css" href="{!! asset('css/datepicker.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('css/navbar.css') !!}">


<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>

<!-- left navbar -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet" />
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js" /></script> -->

<!-- Uploader -->
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="{!! asset('uploader/css/blueimp-gallery.min.css') !!}">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="{!! asset('uploader/css/jquery.fileupload.css') !!}">
<link rel="stylesheet" href="{!! asset('uploader/css/jquery.fileupload-ui.css') !!}">
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="{!! asset('uploader/js/vendor/jquery.ui.widget.js') !!}"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="{!! asset('uploader/js/tmpl.min.js') !!}"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="{!! asset('uploader/js/load-image.all.min.js') !!}"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="{!! asset('uploader/js/canvas-to-blob.min.js') !!}"></script>
<!-- blueimp Gallery script -->
<script src="{!! asset('uploader/js/jquery.blueimp-gallery.min.js') !!}"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="{!! asset('uploader/js/jquery.iframe-transport.js') !!}"></script>
<!-- The basic File Upload plugin -->
<script src="{!! asset('uploader/js/jquery.fileupload.js') !!}"></script>
<!-- The File Upload processing plugin -->
<script src="{!! asset('uploader/js/jquery.fileupload-process.js') !!}"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="{!! asset('uploader/js/jquery.fileupload-image.js') !!}"></script>
<!-- The File Upload audio preview plugin -->
<script src="{!! asset('uploader/js/jquery.fileupload-audio.js') !!}"></script>
<!-- The File Upload video preview plugin -->
<script src="{!! asset('uploader/js/jquery.fileupload-video.js') !!}"></script>
<!-- The File Upload validation plugin -->
<script src="{!! asset('uploader/js/jquery.fileupload-validate.js') !!}"></script>
<!-- The File Upload user interface plugin -->
<script src="{!! asset('uploader/js/jquery.fileupload-ui.js') !!}"></script>
<!-- The main application script -->
<script src="{!! asset('uploader/js/main.js') !!}"></script>

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

