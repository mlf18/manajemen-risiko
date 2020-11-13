<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dampak Risiko</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
          <li class="breadcrumb-item active">Dampak Risiko</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- start: page -->
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-right" style="margin-bottom:12px;">
                    <a class="modal-with-form btn btn-success"  data-toggle="modal" data-target="#modal-tambah" href="#"><i class="fa fa-plus"></i></a>
                    <div class="modal fade" id="modal-tambah">
                      <form id="demo-form" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/dampak_risiko/save" enctype="multipart/form-data">
                        <input type="hidden" name="id_risiko" value="<?php echo $id_risiko;?>">
                        <div class="modal-dialog">
                          <div class="modal-content bg-info">
                            <div class="modal-header">
                              <h4 class="modal-title">Tambah Dampak</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                      <div class="form-group mt-lg">
                                          <div class="col-sm-12">
                                              <div class="row">
                                                  <div class="col-sm-12">
                                                      Dampak : <input type="text" name="dampak[]" class="form-control" placeholder="Dampak" required="" pattern=".{1,254}">
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-sm-12">
                                                      <div id="formTambahan"></div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-sm-12"><button class="btn btn-defult btn-sm" type="button" id="btnTDampak"><i class="fa fa-plus"></i></button></div>
                                              </div>
                                          </div>
                                      </div>

                              </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-outline-light">Save changes</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </form>
                    </div>



                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Dampak</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($dampak as $key => $value) {
                                # code...
                            ?>
                            <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $value->dampak;?></td>
                                    <td class="text-center">
                                        <a  class="modal-with-form mb-xs mt-xs mr-xs btn btn-warning" data-toggle="modal" data-target="#modal-edit-<?php echo $value->id_dampak;?>"><i class="nav-icon fas fa-edit"></i></a>
                                        <a  class="modal-with-form mb-xs mt-xs mr-xs btn btn-danger" data-toggle="modal" data-target="#modal-hapus-<?php echo $value->id_dampak;?>" style="color:white"><i class="fa fa-exclamation-triangle"></i></a>

                                        <div class="modal fade" id="modal-edit-<?php echo $value->id_dampak;?>">
                                          <form id="demo-form-<?php echo $value->id_dampak;?>" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/dampak_risiko/update/<?php echo $value->id_dampak;?>" enctype="multipart/form-data">
                                            <div class="modal-dialog">
                                              <div class="modal-content bg-info">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Edit</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                  <div class="form-group mt-lg">
                                                      <label class="col-sm-3 control-label">Dampak</label>
                                                      <div class="col-sm-9">
                                                          <input type="text" name="dampak" class="form-control" placeholder="Penyebab" required="" value="<?php echo $value->dampak;?>">
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-outline-light">Edit</button>
                                                </div>
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                          </form>
                                        </div>
                                        <!-- /.modal-END -->

                                        <!-- modal-dialog-hapus -->
                                        <div class="modal fade" id="modal-hapus-<?php echo $value->id_dampak;?>">
                                          <form action="<?php echo base_url();?>dampak_risiko/delete/<?php echo $value->id_dampak;?>" method="post">
                                            <div class="modal-dialog">
                                              <div class="modal-content bg-info">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Apakah anda yakin akan menghapus data berikut :</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body" >


                                                        <div class="row">
                                                            <div class="col-md-1">
                                                            </div>
                                                            <div class="col-md-4">
                                                              <label>Dampak</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                              :
                                                            </div>
                                                            <div class="col-md-5">
                                                                <?php echo $value->dampak; ?>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-outline-light">Hapus</button>
                                                </div>
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                          </form>
                                        </div>

                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
          </div>
        </div>
    </div>

</div>

<!-- end: page -->
<?php
function custom_footer(){
?>
<script>
    $("#btnTDampak").click(function(){
        $("#formTambahan").append('<input type="text" name="dampak[]" class="form-control" placeholder="Dampak" pattern=".{1,254}">');
    })
</script>
<?php
}?>
