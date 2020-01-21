<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Pengendalian Risiko</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
          <li class="breadcrumb-item active">Pengendalian Risiko</li>
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
                <div class="col-md-12 text-right" style="margin-bottom:12px;">
                    <a class="modal-with-form btn btn-success" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i></a>
                    <div class="modal fade" id="modal-tambah">
                      <form id="demo-form" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>pengendalian_risiko/save" enctype="multipart/form-data">
                        <input type="hidden" name="id_risiko" value="<?php echo $id_risiko;?>">
                        <div class="modal-dialog">
                          <div class="modal-content bg-info">
                            <div class="modal-header">
                              <h4 class="modal-title">Tambah Pengendalian</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="form-group mt-lg">
                                  Pengendalian

                                    <input type="text" name="pengendalian[]" class="form-control" placeholder="Pengendalian" required="" pattern=".{1,}">

                                          <div id="formTambahan"></div>

                                  <div class="row">
                                      <div class="col-sm-12"><button class="btn btn-defult btn-sm" type="button" id="btnTDampak"><i class="fa fa-plus"></i></button></div>
                                  </div>
                              </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-outline-light">Tambah</button>
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
                                    <th class="text-center">Pengendalian</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($pengendalian as $key => $value) {
                                # code...
                            ?>
                            <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $value->pengendalian;?></td>
                                    <td class="text-center">
                                        <a  class="btn btn-warning" data-toggle="modal" data-target="#editForm-<?php echo $value->id_pengendalian?>"><i class="fas fa-edit"></i> </a>
                                        <a  class="btn btn-danger" data-toggle="modal" data-target="#hapusForm-<?php echo $value->id_pengendalian?>" style="color:white"><i class="fa fa-exclamation-triangle"></i> </a>

                                        <div class="modal fade" id="editForm-<?php echo $value->id_pengendalian ?>">
                                          <form id="demo-form-<?php echo $value->id_pengendalian?>" class="form-horizontal mb-lg" method="post" action="<?php echo base_url().'index.php/pengendalian_risiko/update/' . $value->id_pengendalian ?>" enctype="multipart/form-data">
                                            <div class="modal-dialog">
                                              <div class="modal-content bg-info">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Edit Pengendalian</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group mt-lg">
                                                      <label class="col-sm-3 control-label">Pengendalian</label>
                                                      <div class="row">
                                                          <input type="text" name="pengendalian" class="form-control" placeholder="Pengendalian" required="" value="<?php echo $value->pengendalian;?>">
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
                                        <!-- /.modal edit -->

                                        <!-- modal Hapus -->
                                        <div class="modal fade" id="hapusForm-<?php echo $value->id_pengendalian;?>">
                                          <form action="<?php echo base_url();?>index.php/pengendalian_risiko/delete/<?php echo $value->id_pengendalian;?>" method="post">
                                          <input type="hidden" name="id_pengendalian" value="<?php echo $value->id_pengendalian;?>">
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
                                                        <label>Pengendalian : </label>
                                                      </div>
                                                      <div class="col-md-1">
                                                        :
                                                      </div>
                                                      <div class="col-md-5">
                                                          <?php echo $value->pengendalian?>
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
                                        <!-- /.modal hapus -->
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

<!-- end: page -->
<?php
function custom_footer(){
?>
<script>
    $("#btnTDampak").click(function(){
        $("#formTambahan").append('<input type="text" name="pengendalian[]" class="form-control" placeholder="Pengendalian" pattern=".{1,}">');
    })
</script>
<?php
}?>
