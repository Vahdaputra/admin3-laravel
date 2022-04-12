@extends('layouts.main')
@section('container')
    
<div class="pagetitle">
    <h1>Forms</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Form Pengeluaran</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
 <!-- Vertical Form -->
 <form action="{{ 'url'('pengeluaran') }}" method="POST" class="row g-3">
 {{csrf_field()}}   
 <div class="col-12">
      <label for="inputNanme4" class="form-label">Keterangan</label>
      <input type="text" name="ket" class="form-control" id="keterangan">
    </div>
    @error('ket')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="col-12">
      <label for="inputEmail4" class="form-label">Tanggal</label>
      <input type="date" name="tgl" class="form-control" id="tanggal">
    </div>
    @error('tgl')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="col-12">
      <label for="inputPassword4" class="form-label">jumlah</label>
      <input type="text" name="jml" class="form-control" id="jumlah">
    </div>
    @error('jml')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
      @if ($message = Session::get('flash_message'))
				<div class="alert alert-success alert-block">
					<strong>{{ $message }}</strong>
				</div>
				@endif
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form><!-- Vertical Form -->
  @endsection