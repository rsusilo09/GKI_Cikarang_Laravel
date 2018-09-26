<!DOCTYPE html>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<html lang="en">
  <?php $title = "../layout/Fasilitas"; ?>
<head>
  <?php include "../layout/head.php"; ?>
</head>

<body>
  <!-- NAVIGASI -->
  <?php include "../layout/navigasi.php"; ?>

  <!-- ISI -->
  <div class="container">
	  <div class="row"><br>
		  <form class="form-horizontal">
        <fieldset>

        <!-- Form Name -->
        <legend>Form Peminjaman</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Current Fleet  Size">Nama Peminjam</label>
          <div class="col-md-5">
            <input id="Current Fleet Size" name="Current Fleet Size" type="text" placeholder="Nama Lengkap" class="form-control input-md">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Annual Forklift Purchases">Email</label>
          <div class="col-md-5">
            <input id="Annual Forklift Purchases" name="Annual Forklift Purchases" type="text" placeholder="example@gkicikarang.com" class="form-control input-md">

          </div>
        </div>

        <!-- Select Multiple -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Area of Interest">Peminjaman</label>
          <div class="col-md-5">
            <select id="Area of Interest" name="Area of Interest" class="form-control" multiple="multiple">
              <option value="1">Ruangan</option>
              <option value="2">Mobil</option>
              <option value="3">Peralatan</option>

            </select>
          </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Decision Timeframe">Waktu Peminjaman</label>
          <div class="col-md-5">
            <select id="Decision Timeframe" name="Decision Timeframe" class="form-control">
              <option value="1">Satu Hari</option>
              <option value="2">Seminggu</option>
              <option value="3">1-3 minggu</option>
              <option value="4">1 bulan</option>
              <option value="5">1-3 bulan</option>
              <option value="6">3+ bulan</option>
            </select>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Message">Pesan dan Keterangan</label>
          <div class="col-md-5">
            <input id="Message" name="Message" type="text" placeholder="(Ruangan: Roma.) (Perlengkapan: Kursi, Meja, Proyektor.) (Mobil: Elf.)" class="form-control input-md">

          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton">Submit</label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
          </div>
        </div>

        </fieldset>
      </form>
    </div>
  </div><br>


  <!-- FOOTER -->
  <?php include "../layout/foot.php"; ?>

  <!-- SCRIPT -->
  <?php include "../layout/script.php"; ?>

</body>

</html>
