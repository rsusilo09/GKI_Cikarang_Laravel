<!DOCTYPE html>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<html lang="en">
  <?php $title = "Home"; ?>
<head>
  <?php include "../layout/head.php"; ?>
</head>

<body>
  <!-- NAVIGASI -->
  <?php include "../layout/navigasi.php"; ?>

  <!-- JUMBOTRON -->
  <div id="jumbotron-top">
    <div class="container-fluid">
      <div class="row">
        <div id="myCarousel" class="carousel slide">
          <!-- Dot Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <!-- <li data-target="#myCarousel" data-slide-to="1"></li> -->
            <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
          </ol>
          <!-- Items -->
          <div class="carousel-inner">
            <div class="active item">
              <img src="../assets/images/gkicikarang_photo.jpg" class="img-responsive">
            </div>
             <!-- <div class="item">
              <img src="../assets/images/pendeta_all_photo.jpg" class="img-responsive">
            </div> -->
            <!-- <div class="item">
              <img src="images/contoh_gambar_utama3.png" class="img-responsive">
            </div> -->
          </div>
          <!-- Navigation -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    </div>
  </div><br>

  <!-- FOOTER -->
  <?php include "../layout/foot.php"; ?>

  <!-- SCRIPT -->
  <?php include "../layout/script.php"; ?>

</body>

</html>
