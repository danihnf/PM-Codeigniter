<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Masukan Data</title>
</head>

<!-- file bootstrap css yang digunakan-->

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

<link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


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
                        <a href="">Activity</a>
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
                        <h3>Input Activity</h3>
                    </center>
                </div>
            </div>
        </div>
    </div><br>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>activity/simpan" method="POST" enctype="multipart/form-data">

                       <input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control">

                       <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Program</label>
                        </div>
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                            <select name="program" class="form-control">
                                <?php
                                foreach($program as $prog){
                                     $id = $prog->id;
                                     $program = $prog->program;
                                ?>
                                <option value="<?php echo $id; ?>"><?php echo $program; ?></option>
                                <?php
                            }
                            ?>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Activity</label>
                        </div>
                        <div class="col-sm-6 input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                            <input type="text" class="form-control" name="activity" placeholder="Masukan Activity">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Start</label>
                        </div>
                        <div class="date col-sm-6 input-group" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="text" name="start" style="width:150px" placeholder="Tanggal Mulai"></i>
                        </div>
                        <input type="hidden" id="dtp_input2" value=""/>
                    </div> 

                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Stop</label>
                        </div>
                        <div class="date col-sm-6 input-group" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="text" name="stop" style="width:150px" placeholder="Tanggal Berakhir">
                        </div>
                        <input type="hidden" id="dtp_input2" value=""/>
                    </div> 

                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Budget</label>
                        </div>
                        <div class="col-sm-6 input-group">
                           <span class="input-group-addon"><i>Rp</i></span>
                           <input type="text" class="form-control" name="budget" size="20" placeholder="Rupiah">
                       </div>
                   </div>

                   <div class="form-group">
                    <div class="col-sm-2">
                        <label class="control-label">Member</label>
                    </div>
                    <div class="col-sm-6 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <select name="member" class="form-control">
                                <?php
                                foreach($member as $obj1){
                                     $id = $obj1->id;
                                     $name = $obj1->name;
                                ?>
                                <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
                                <?php
                            }
                            ?>
                            </select>
                    </div>
                </div> 

                <div class="form-group">
                    <div class="col-sm-2">
                        <label class="control-label">Progress</label>
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

<!-- jQuery Version 1.11.0 -->
<script src="<?php echo base_url() ?>assets/jquery-1.11.0.js"></script>


<!--file include Bootstrap js dan datepickerbootstrap.js-->

<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

<!-- Fungsi datepickier yang digunakan -->
<script type="text/javascript">
   $('.datepicker').datetimepicker({
    language:  'id',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
});
</script> 

</html>