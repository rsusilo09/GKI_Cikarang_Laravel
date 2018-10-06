@extends('template')
@section('title', 'Warta Jemaat')
@section('content')
  <div class="container" style="min-height: 400px;" >
    <div class="row">
      <div class="col-xd-12 text-center">
        <h1>Warta Jemaat Bulan <?php date_default_timezone_set('Asia/Jakarta'); echo date("F Y"); ?></h1>
        <a href="#"><p>Warta Jemaat, Minggu, 15 Juli  2018.</p></a>
        <a href="#"><p>Warta Jemaat, Minggu, 8 Juli  2018.</p></a>
        <a href="#"><p>Warta Jemaat, Minggu, 1 Juli 2018.</p></a>
      </div>
    </div>
  </div>
@stop