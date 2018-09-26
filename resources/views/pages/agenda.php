<!DOCTYPE html>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<html lang="en">
<?php $title = "Agenda"; ?>

<head>
  <?php include "../layout/head.php"; ?>
</head>

<body>
  <!-- NAVIGASI -->
  <?php include "../layout/navigasi.php"; ?>

  <!-- ISI -->
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-xs-12" style="overflow:scroll;">
        <table class="table-condensed table-bordered table-striped" width="100%">
          <thead>
            <tr>
              <th colspan="7">
                <a class="btn btn-danger"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="btn">Agustus 2018</a>
                <a class="btn btn-danger"><i class="glyphicon glyphicon-chevron-right"></i></a>
              </th>
            </tr>
            <tr>
              <th>Sunday</th>
              <th>Monday</th>
              <th>Tuesday</th>
              <th>Wednesday</th>
              <th>Thursday</th>
              <th>Friday</th>
              <th>Saturday</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="muted">29</td>
              <td class="muted">30</td>
              <td class="muted">31</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
            </tr>
            <tr>
              <td>5</td>
              <td>6</td>
              <td>7</td>
              <td>8</td>
              <td>9</td>
              <td>10</td>
              <td>11</td>
            </tr>
            <tr>
              <td>12</td>
              <td>13</td>
              <td>14</td>
              <td>15</td>
              <td>16</td>
              <td>17</td>
              <td>18</td>
            </tr>
            <tr>
              <td>19</td>
              <td><strong>20</strong></td>
              <td>21</td>
              <td>22</td>
              <td>23</td>
              <td>24</td>
              <td>25</td>
            </tr>
            <tr>
              <td>26</td>
              <td>27</td>
              <td>28</td>
              <td>29</td>
              <td class="muted">1</td>
              <td class="muted">2</td>
              <td class="muted">3</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div><br><br>


  <!-- FOOTER -->
  <?php include "../layout/foot.php"; ?>

  <!-- SCRIPT -->
  <?php include "../layout/script.php"; ?>

</body>

</html>
