@extends('layouts.main')
@section('container')
    
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
               <!-- Sales Card -->
               <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">PEMASUKAN<span></span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>Rp.{{$jumlah_pemasukan}}</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End Sales Card1 -->
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">PENGELUARAN <span></span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>Rp.{{$jumlah_pengeluaran}}</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End Sales Card2 -->
  
              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title">KEUNTUNGAN BERSIH <span></span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                      </div>
                      <div class="ps-3">
                        <h6>Rp.{{$total_jumlah}}</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End Revenue Card -->
              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title">PERSENTASE LABA<span></span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-arrow-up-right"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{$persen}}%</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End Revenue Card -->

      </div>
    </section>

    @endsection

 