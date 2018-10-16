<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>PROGRAM</th>
                  <th>DESKRIPSI</th>
                  <th>START</th>
                  <th>STOP</th> 
                  <th>BUDGET</th>
                  <th>MEMBER</th>
                  <th>PROGRESS</th>
                  <th>AKSI</th>
                </tr> 
                <?php
                  $no=$this->uri->segment('3');
                  foreach ($program as $obj1) {
                    $no++; 
                 ?> 
                      <tr>
                            <td><?php echo $no; ?></td>  
                            <td><a href="<?php echo base_url(); ?>activity/index/<?php echo $obj1->id; ?>"><?php echo $obj1->program; ?></a></td>
                            <td><?php echo $obj1->deskripsi; ?></td>  
                            <td><?php echo $obj1->start; ?></td> 
                            <td><?php echo $obj1->stop; ?></td> 
                            <td>Rp. <?php echo $obj1->budget; ?></td>
                            <td><?php echo $obj1->member; ?></td>
                            <td><?php echo $obj1->progress; ?></a></td>
                            <td>
                            <a href="<?php echo base_url(); ?>admin/edit/<?php echo $obj1->id; ?>"><button type="button" class="btn btn-warning glyphicon glyphicon-edit"></button> </a>

                            <a href="javascript:if(confirm('Anda yakin ingin menghapus data?')){document.location='<?php echo base_url(); ?>admin/hapus/<?php echo $obj1->id; ?>';}"><button type="button" class="btn btn-danger glyphicon glyphicon-trash"></button> </a>
                            </td>
                      </tr>
                      <?php
                  }
                ?>
              </thead>
              <?php
                echo $this->pagination->create_links();
              ?>
              </table>
          </div>
        </div>
      </div>
    </div>
</body>