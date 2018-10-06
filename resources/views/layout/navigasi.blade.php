@section('navigasi')
<header>
  <!-- NAVIGASI -->
  <div id="navigasi-top">
    <div class="container-fluid">
      <!-- Topper w/ logo -->
      <div class="row hidden-xs topper">
        <div class="col-xs-7 col-sm-7">
          <a href="{{ url ('/') }}">
            <img am-TopLogo alt="SECUREVIEW" src="images/logo_gkicikarang.png" class="img-responsive">
          </a>
        </div>
        <div class="col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-0 text-right ">
          <div am-CallNow>
            <!-- <p>Telp. 021-1234567</p> -->
          </div>
        </div>
      </div>
      <!-- End Topper -->
      <!-- Navigation -->
      <div class="row">
        <nav class="navbar navbar-inverse navbar--bottom" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand visible-xs-inline-block nav-logo" href="#">
                <img src="images/logo_gkicikarang_small_white.png" class="img-responsive" alt="">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav js-nav-add-active-class">
                <li>
                  <a href="{{ url ('/') }}">Home</a>
                </li>
                <li>
                  <a href="{{ url ('warta') }}">Warta Jemaat</a>
                </li>
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Majelis Jemaat
                    <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="{{ url ('/') }}">Bidang</a>
                    </li>
                    <li>
                      <a href="{{ url ('/') }}">Komisi</a>
                    </li>
                    <li>
                      <a href="{{ url ('/') }}">Pokja</a>
                    </li>
                    <li>
                      <a href="{{ url ('/') }}">Wilayah</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="{{ url ('artikel') }}">Artikel</a>
                </li>
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fasilitas
                    <b class="caret"></b>
                  </a>
				  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="{{ url ('/') }}">Ruangan</a>
                    </li>
                    <li>
                      <a href="{{ url ('/') }}">Mobil</a>
                    </li>
                    <li>
                      <a href="{{ url ('/') }}">Peralatan</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="{{ url ('agenda') }}">Agenda</a>
                </li>
                <li>
                  <a href="{{ url ('/') }}">Kontak Kami</a>
                </li>
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tentang Kami
                    <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="{{ url ('/') }}">Sejarah</a>
                    </li>
                    <li>
                      <a href="{{ url ('/') }}">Visi Misi</a>
                    </li>
                    <li>
                      <a href="{{ url ('/') }}">Keanggotaan</a>
                    </li>
                    <li>
                      <a href="{{ url ('/') }}">Susunan Majelis</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
@yield('content')
@extends('layout.foot')