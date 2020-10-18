<!DOCTYPE html>
<html>
<head>
<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
 
<div class="container">
<center>
<h4>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
<h5><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
</center>

{{-- notifikasi form validasi --}}
@if ($errors->has('file'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('file') }}</strong>
</span>
@endif
 
{{-- notifikasi sukses --}}
@if ($sukses = Session::get('sukses'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{{ $sukses }}</strong>
</div>
@endif

<br/>
<a href="/pegawai/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
<a href="/pegawai/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
IMPORT EXCEL
</button>
 
<!-- Import Excel -->
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<form method="post" action="/pegawai/import_excel" enctype="multipart/form-data">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
</div>
<div class="modal-body">
 
{{ csrf_field() }}
 
<label>Pilih file excel</label>
<div class="form-group">
<input type="file" name="file" required="required">
</div>
 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Import</button>
</div>
</div>
</form>
</div>
</div>

<table class='table table-bordered'>
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Alamat</th>
<th>Telepon</th>
<th>Pekerjaan</th>
</tr>
</thead>
<tbody>
@php $i=1 @endphp
@foreach($pegawai as $p)
<tr>
<td>{{ $i++ }}</td>
<td>{{$p->nama}}</td>
<td>{{$p->email}}</td>
<td>{{$p->alamat}}</td>
<td>{{$p->telepon}}</td>
<td>{{$p->pekerjaan}}</td>
</tr>
@endforeach
</tbody>
</table>
 
</div>
 
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>