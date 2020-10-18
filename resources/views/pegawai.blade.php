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
<br/>
<a href="/pegawai/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
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
 
</body>
</html>