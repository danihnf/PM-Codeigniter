<?php 
foreach ($detail->result_array() as $pr)
{
    $activity=$pr['activity'];
    $tgl=$pr['tgl'];
    $report=$pr['report'];
    $id= $pr['id'];
    $budget=$pr['budget'];
    $progress=$pr['progress'];
}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
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
                <a class="navbar-brand" href="<?php echo base_url(); ?>">PROGRAM MANAGEMENT</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="">Report</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="jumbotron">
        <p class="lead"><center><p><b>REPORT PROGRAM</b></p></center></p>
        <p class="lead">Activity : <b><?php echo "$activity" ?></b></p>
        <p class="lead">Update Terakhir : <b><?php echo "$tgl" ?></b></p>
        <p class="lead">Laporan Terakhir : <?php echo "$report" ?></p>

        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h3>Update Report</h3>
                    </center>
                </div>
            </div>
        </div>
    </div><br>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>report/edit" method="POST">

                        <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control">
                        <input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control">
                        
                        <div class="form-group">
                           
                            <div class="col-sm-8">

                                <input type="hidden" class="form-control" name="activity" size="30" value="<?php echo $activity; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="col-sm-2">
                                    <label class="control-label">Current Report</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" rows="5" name="report">
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                            <label class="control-label">Budget</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="budget" size="30" value="<?php echo $budget; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Progress
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="progress" size="20" value="<?php echo $progress; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn-primary btn-lg" value="simpan" name="simpan">Simpan</button>

                                    <a href="<?php echo base_url(); ?>report" class="btn btn-default btn-lg">Batal</a>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </html>