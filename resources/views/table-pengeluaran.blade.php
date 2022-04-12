@extends('layouts.main')
@section('container')
<?php
$total = 0;
?>
<div class="pagetitle">
    <h1>Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Table Pengeluaran</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
<section class="section">
    <div class="row">
      <div class="col-lg-12">
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Age</th>
                  <th scope="col">Start Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach($data_pengeluaran as $item)
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->keterangan}}</td>
                  <td>{{$item->tanggal}}</td>
                  <td>{{$item->jumlah}}</td>
                  <?php
                  $total=$total+$item->jumlah;
                  ?>
                  <td>
                  <a href="{{'url'('tab-keluar/edit/'.$item->id)}}" type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></a>
                  <a href="{{'url'('tab-keluar/delete/'.$item->id)}}" type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></a>
                </td>
                </tr>
                @endforeach

              </tbody>
            </table>

            <div class="row" style="margin-left:350px; font-weight:bold;">TOTAL: Rp. {{$total}},-</div>
              <div class="row" style="margin-left:350px;"></div>
            <!-- End Table with stripped rows -->
            @endsection