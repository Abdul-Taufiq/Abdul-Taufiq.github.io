@extends('layout.main')

@section('konten')
<!-- ISI KONTEN -->
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><i class="fa fa-edit"></i> Edit Data Datang</h1>

	<div class="card shadow mb-4">
		<div class="card-body">

			<form action="  {{ url('datang/'.$datang->id_datang) }} " method="post" enctype="multipart/form-data">
				{{-- DEKLARASI METHODE ROUTING --}}
                @method('patch')
                {{-- CSRF TOKEN --}}
                @csrf
				<div class="form-group">
					<label>Nomor Datang</label>
					<input type="text" name="no_datang" autocomplete="off" required maxlength="30" value="{{ old('no_datang', $datang->no_datang) }}"
					class="form-control @error('no_datang') is-invalid @enderror" autofocus>
					{{-- Erorr Message --}}
					@error('no_datang')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror

				</div>
				<div class="form-group">
					<label>Tanggal Datang</label>
					<input type="text" name="tgl_datang" id="tgl_datang" required 
						data-provide="datepicker" required value="{{ old('tgl_datang', $datang->tgl_datang->format('d-m-Y')) }}"
					class="datepicker @error('tgl_datang') is-invalid @enderror" style="width: 100%;" placeholder="DD-MM-YYYY" maxlength="10">
					@error('tgl_datang')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<label>Alamat Lama</label>
					<input type="text" name="alamat_lama" autocomplete="off" maxlength="200" required value="{{ old('alamat_lama', $datang->alamat_lama) }}"
					class="form-control @error('alamat_lama') is-invalid @enderror">
					{{-- Erorr Message --}}
					@error('alamat_lama')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<label>Alamat Baru</label>
					<input type="text" name="alamat_baru" autocomplete="off" maxlength="200" required value="{{ old('alamat_baru', $datang->alamat_baru) }}"
					class="form-control @error('alamat_baru') is-invalid @enderror">
					{{-- Erorr Message --}}
					@error('alamat_baru')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group">
					<label>Alasan</label>
					<input type="text" name="alasan" autocomplete="off" maxlength="200" required value="{{ old('alasan', $datang->alasan) }}"
					class="form-control @error('alasan') is-invalid @enderror">
					{{-- Erorr Message --}}
					@error('alasan')
					<div class="invalid-feedback">{{ $message }}</div>
					@enderror
				</div>
				<div class="modal-footer">
					<a href=" /datang " class="btn btn-danger btn-icon-split">
						<span class="icon text-white">
							Kembali
						</span>
					</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>

@endsection