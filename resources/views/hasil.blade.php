<!DOCTYPE html>
<html>
<head>
    <title> .:: UPLOAD GAMBAR KE CLOUDINARY - SOLUSI CDN GAMBAR GRATIS ::.</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('apps.js') }}"></script>
</head>
<body>
<br /><br >
<div class="container">
    <div class="row">

        <div class="col-md-12">

            @if (Session::has('flash_notification.message'))
                <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('flash_notification.message') }}
                </div>
            @endif


            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Hasil Upload</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12 col-md-12">
                        <input type="text" class="form-control" value="{{$url_gambar}}" disabled="" /><br />
                        <img src="{{ $url_gambar }}" style="width:100%">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>