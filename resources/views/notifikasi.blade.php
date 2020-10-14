<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>Malas Ngoding</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
</head>
<body>

<div class="container mt-5">
<div class="row">
<div class="col-md-12">
 
<center>
<h2>Tutorial Laravel #33 : Notifikasi Dengan Session Laravel</h2>
<h4><a href="https://www.malasngoding.com/notifikasi-dengan-session-laravel/">WWW.MALASNGODING.COM</a></h4>
</center>
 
@if (Session::get('message'))
<div class="alert alert-{{ Session::get('type') }} alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ Session::get('message') }}</strong>
</div>
@endif
 
<!-- @if ($message = Session::get('gagal'))
<div class="alert alert-danger alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif
 
@if ($message = Session::get('peringatan'))
<div class="alert alert-warning alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $message }}</strong>
</div>
@endif -->
 
 
<center>
<a href="/pesan/sukses" class="btn btn-success">NOTIFIKASI SUKSES</a>
<a href="/pesan/gagal" class="btn btn-danger">NOTIFIKASI GAGAL</a>
<a href="/pesan/peringatan" class="btn btn-warning">NOTIFIKASI PERINGATAN</a>
</center>
</div>
</div>
</div>
 
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>