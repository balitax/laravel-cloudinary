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

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Upload Images Ke Cloudinary</h3>
                    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12 col-md-12">
                        <form action="{{ url('') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Gambar" /><br />
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" placeholder="Pilih File Gambar" disabled="disabled">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" accept="image/*" name="gambar"/> <!-- rename it -->
                                    </div>
                                </span>
                            </div><br />
                            <button class="btn btn-success">Kirim Gambar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
</body>
</html>