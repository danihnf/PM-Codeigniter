<?php 
foreach ($nama->result_array() as $pr)
{
    $activity=$pr['activity'];
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
                <a class="navbar-brand" href="<?php echo base_url(); ?>admin">PROGRAM MANAGEMENT</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="##">Report</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h3>Input Report</h3>
                    </center>
                </div>
            </div>
        </div>
    </div><br>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>report/simpan" method="POST">

                        <input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control">
                        
                        <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Activity</label>
                            </div>
                            <div class="col-sm-6 input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                                <input  type="text" class="form-control" name="activity" size="30" value="<?php echo $activity; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                            <label class="control-label">Budget</label>
                            </div>
                            <div class="col-sm-6 input-group">
                                <span class="input-group-addon"><i>Rp</i></span>
                                <input type="text" class="form-control" name="budget" size="30">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Progress
                                </div>
                                <div class="col-sm-6 input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                     <select name="progress" class="form-control">
                            <option value="10%">10%</option>
                            <option value="20%">20%</option>
                            <option value="30%">30%</option>
                            <option value="40%">40%</option>
                            <option value="50%">50%</option>
                            <option value="60%">60%</option>
                            <option value="70%">70%</option>
                            <option value="80%">80%</option>
                            <option value="90%">90%</option>
                            <option value="100%">100%</option>
                            
                        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label class="control-label">Report</label>
                                </div>
                                <div class="col-sm-6 input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <input type="text" class="form-control" name="report" size="20">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="hidden" class="form-control" name="tgl" size="20" value="<?php echo '.date"Y-m-d"'; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn-primary btn-lg" value="Simpan" name="simpan">Simpan</button>

                                    <a href="<?php echo base_url(); ?>admin" class="btn btn-default btn-lg">Batal</a>
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