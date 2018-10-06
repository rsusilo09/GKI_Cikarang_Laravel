<!DOCTYPE html>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<html lang="en">
  <?php $title = "Kontak Kami"; ?>
<head>
  <?php include "../layout/head.php"; ?>
</head>

<body>
  <!-- NAVIGASI -->
  <?php include "../layout/navigasi.php"; ?>

  <!-- ISI -->
  <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-12">
            <h1 class="h1">Kontak Kami</h1>
          </div>
        </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-md-8">
          <div class="well well-sm">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">
                      Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" required="required" />
                  </div>
                  <div class="form-group">
                    <label for="email">
                      Email </label>
                        <div class="input-group">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                          </span>
                          <input type="email" class="form-control" id="email" placeholder="example@gkicikarang.com" required="required" />
                        </div>
                  </div>
                  <div class="form-group">
                    <label for="subject">
                      Subject</label>
                        <select id="subject" name="subject" class="form-control" required="required">
                          <option value="na" selected="">Pilih Salah Satu:</option>
                          <option value="service">General Customer Service</option>
                          <option value="suggestions">Suggestions</option>
                          <option value="product">Product Support</option>
                        </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">
                      Kritik dan Saran</label>
                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Kritik dan Saran"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                    Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Kontak GKI Cikarang</legend>
            <address>
                <strong>GKI Cikarang</strong><br>
                Ruko Roxy Blok A12-16<br>
                Jl. MH. Thamrin, Cibatu,<br>
                Lippo Cikarang, Cikarang Selatan<br>
                Kab. Bekasi, Jawa Barat-17550<br>
                <abbr title="Phone">
                    Phone and Fax:</abbr>
                (021) 8990-0165
            </address>
            <address>
                <strong>Email</strong><br>
                <a href="mailto:#">admin@gkicikarang.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

  <!-- FOOTER -->
  <?php include "../layout/foot.php"; ?>

  <!-- SCRIPT -->
  <?php include "../layout/script.php"; ?>

</body>

</html>
