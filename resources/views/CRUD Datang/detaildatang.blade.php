@extends('layout.main')

<style type="text/css">
	 tr{
			border-bottom: 1px solid black;
		}
</style>

@section('konten')
<!-- ISI KONTEN -->
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800"><i class="fa fa-info-circle" aria-hidden="true"></i> Detail Data Datang</h1>


<!-- DataTales -->
{{-- TOMBOL ATAS CARD TABEL --}}
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<div style="float: left;">
			<a href="{{ url('datang/cetak/cetak-detail-datang/'.$datang->id_datang) }}" class="btn btn-primary btn-icon-split btn-sm mb-2" target="_blank">
				<span class="icon text-white-50">
					<i class="fa fa-print" aria-hidden="true"></i>
				</span>
				<span class="text">Cetak Laporan</span>
			</a>
		</div>
		<div style="float: right;">
			<a href=" {{ url('datang') }} " class="btn btn-warning btn-icon-split btn-sm">
				<span class="icon text-white">
					<i class="fa fa-arrow-left" aria-hidden="true"></i> Back
				</span>
			</a>
		</div>
</div>
{{-- TABEL --}}
<div class="card-body">

	<div class="table-responsive" id="detail">
		<table id="" width="100%" cellspacing="0" cellpadding="4" style="border-collapse: collapse;">
		@php
		$no=1;
		@endphp
		<tr>
			@foreach ($datang->penduduk as $item)
			<th>No</th>
			<td>{{ $no++ }}</td>
		</tr>
		<tr>
			<th>Nomor Kartu Keluarga</th>
			<td> {{ $item-> kk -> no_kk }} </td>
		</tr>
		<tr>
			<th>Nomor Datang</th>
			<td> {{ $datang -> no_datang }} </td>
		</tr>
		<tr>
			<th>Nomor Induk Kependudukan</th>
			<td> {{ $item -> nik }} </td>
		</tr>
		<tr>
			<th>Nama</th>
			<td> {{ $item -> nama }} </td>
		</tr>
		<tr>
			<th>Jenis Kelamin</th>
			<td> {{ $item -> jns_kelamin }} </td>
		</tr>
		<tr>
			<th>Tempat, Tanggal Lahir</th>
			<td> {{ $item -> tempat_lahir }}, {{ $item -> tgl_lahir->format('d-m-Y') }} </td>
		</tr>
		<tr>
			<th>Tanggal Datang</th>
			<td> {{ $datang -> tgl_datang->format('d-m-Y') }} </td>
		</tr>
		<tr>	
			<th>Alamat Lama</th>
			<td> {{ $datang -> alamat_lama }} </td>
		</tr>
		<tr>	
			<th>Alamat Baru</th>
			<td> {{ $datang -> alamat_baru }} </td>
		</tr>
		<tr>	
			<th>Alasan</th>
			<td> {{ $datang -> alasan }} </td>
		</tr>
		<tr>
			<th colspan="2"> <br>	
			====================================================================================================== <br><br>
			</th>
		</tr>
		@endforeach
	</table>
	</div>
  </div>
</div>

@endsection