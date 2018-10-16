
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>admin"><span>PROJECT MANAGEMENT</span></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-ex-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="<?php echo base_url(); ?>admin">Program</a>
          </li>
          <li>
            <a href="">Activity</a>
          </li>
          <li class="active">
            <a href="<?php echo base_url(); ?>report">Report</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center"><b> LAPORAN </b></p>
        </div>
      </div>
    </div>
  </div>
  <div class="menu">
    <div class="container">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <a href="<?php echo base_url(); ?>report/add/<?php echo $id_activity; ?>">
            <button class="btn btn-success navbar-btn login glyphicon glyphicon-plus"data-toggle="modal"></button></a>
          </div>
          <div>

            <form class="navbar-form navbar-left" role="search" method="post" action="##">
              <div class="form-group">
                <input name="search" type="text" class="form-control" placeholder="Search by name">
              </div>
              <button type="submit" class="btn btn-default" name="submit">Search</button>
            </form>

          </div>
        </nav>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>ACTIVITY</th>
                  <th>BUDGET</th>
                  <th>PENYERAPAN</th>

                  <th>PROGRESS</th>
                  <th>REPORT</th>
                </tr>
                <?php 
                $no=0;
                if ($report) {
              # code...

                  foreach ($report as $obj1) {
                    $no++;
                    $time=strtotime($obj1['tgl']);
                    $tanggal=date("d",$time);
                    $month=date("M",$time);
                    $year=date("Y",$time);
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>  
                      <td><?php echo $obj1['activity']; ?></td>  
                      <td>Rp <?php echo $obj1['budget']; ?></td> 
                      <td>echo penyerapan</td>
                      <td><?php echo $obj1['progress'] ?></td>
                      <td>
                        <?php
                        foreach ($obj1['history'] as $dtHistory){
                          $time2=strtotime($dtHistory['tgl']);
                          $tanggal2=date("d",$time2);
                          $month2=date("M",$time2);
                          $year2=date("Y",$time2);
                          ?>
                          <a href="<?php echo base_url(); ?>report/report/<?php echo $dtHistory['id'];?>"><?php  echo $tanggal2,$month2; ?></a>,
                          <?php
                        }
                        ?>
                        <a href="<?php echo base_url(); ?>report/report/<?php echo $obj1['id'];?>"><?php  echo $tanggal,$month; ?></a>,
                      </td>
                      <?php
                    }
                  }
                  ?>
                </tr>

              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </html>