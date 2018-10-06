<!DOCTYPE html>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<html lang="en">
  <?php $title = "Fasilitas"; ?>
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
        <legend>Form Peminjaman Mobil</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Nama Peminjam</label>
          <div class="col-md-5">
            <input id="nama" type="text" placeholder="Nama - Komisi" class="form-control input-md">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Email</label>
          <div class="col-md-5">
            <input id="email" name="name" type="text" placeholder="example@gkicikarang.com" class="form-control input-md">
          </div>
        </div>

        <!-- Select Multiple -->
        <div class="form-group">
          <label class="col-md-4 control-label">Mobil</label>
          <div class="col-md-5">
            <select id="mobil" name="mobil" class="form-control">
              <option value="0">Elf</option>
              <option value="1">Gran Max</option>
            </select>
          </div>
        </div>

		<!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Keperluan</label>
          <div class="col-md-4">
            <input id="message" name="message" type="text" placeholder="Antar dan Jemput Anak Sekolah Minggu" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <input id="jemput" name="jemput" type="checkbox" class="input-sm checkbox-inline" onchange="hide()"> PP <!-- funtion.js line 1 -->
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Tanggal Peminjaman</label>
          <div class="col-md-2">
            <input id="tgl_antar" name="tgl_antar" type="date" class="form-control input-md">
          </div>
          <div class="col-md-1">
    			<label id="label_tgl_jemput" class="col-md-offset-2 control-label" style="visibility:hidden">Jemput</label>
    		  </div>
    		  <div class="col-md-2">
    			 <input type="date" id="tgl_jemput" name="tgl_jemput" class="form-control input-md" style="visibility:hidden">
    		  </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Decision Timeframe">Antar</label>
          <div class="col-md-2">
            <!--<select id="Decision Timeframe" name="Decision Timeframe" class="form-control">
              <option value="1">Satu Hari</option>
              <option value="2">Seminggu</option>
              <option value="3">1-3 minggu</option>
              <option value="4">1 bulan</option>
              <option value="5">1-3 bulan</option>
              <option value="6">3+ bulan</option>
            </select>-->
			<input type="time" id="waktu_antar" class="form-control">
          </div>
		  <div class="col-md-1">
			<label class="col-md-offset-2 control-label" id="label_waktu_jemput" style="visibility:hidden">Jemput</label>
		  </div>
		  <div class="col-md-2">
			 <input type="time" id="waktu_jemput" class="form-control" style="visibility:hidden">
		  </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Pesan dan Keterangan</label>
          <div class="col-md-5">
            <input id="desc" name="desc" type="text" placeholder="Acara mulai jam 16.00 dan selesai jam 18.00" class="form-control input-md">

          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <!--<label class="col-md-4 control-label" for="singlebutton">Submit</label>-->
          <div class="col-md-offset-4 col-md-1">
            <button id="submit_mobil" name="submit_mobil" class="btn btn-primary">Submit</button>
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
