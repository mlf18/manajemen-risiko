<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Manajemen Risiko</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th class="text-center">No</th>
                          <th class="text-center">Unit Kerja</th>
                          <th class="text-center">Tahun</th>
                          <th class="text-center">Lihat</th>
                          <th class="text-center">Rangkuman</th>
                          <th class="text-center">Edit</th>
                          <th class="text-center">Hapus</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                      foreach ($manajemen_risiko as $key => $value) {
                  ?>
                      <tr>
                          <td><?php echo $key+1;?></td>
                          <td width="50%"><?php echo $value->nama_unit?></td>
                          <td><?php echo $value->tahun;?></td>
                          <td class="text-center"><a href="<?php echo base_url();?>index.php/sasaran_organisasi/index/<?php echo $value->id_manajemen_risiko;?>" class="btn btn-sm btn-success"><i class="fa fa-search"></i> Lihat</a></td>
                          <td> <a href="<?php echo base_url('index.php/manajemen_risiko/info_risiko/').$value->id_manajemen_risiko; ?>" class="btn btn-sm btn-primary"><i class="fa fa-list"></i> Rangkuman</a>  </td>
                          <td class="text-center"><a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit-<?php echo $value->id_manajemen_risiko;?>"><i class="nav-icon fas fa-edit"></i> Edit</a></td>
                          <td class="text-center"><a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus-<?php echo $value->id_manajemen_risiko;?>"><i class="fa fa-exclamation-triangle"></i> Hapus</a></td>
                          <!-- modal Edit -->
                          <div class="modal fade" id="modal-edit-<?php echo $value->id_manajemen_risiko;?>">
                            <form id="demo-form" class="form-horizontal mb-lg" action="<?php echo base_url();?>index.php/manajemen_risiko/update/<?php echo $value->id_manajemen_risiko;?>"  method="post" enctype="multipart/form-data">
                              <div class="modal-dialog">
                                <div class="modal-content bg-info">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Edit</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="form-group mt-lg">
                                          <label class="col-sm-3 control-label">Nama UPR</label>
                                          <div class="col-sm-9">
                                          <select name="id_upr" class="form-control">
                                              <?php foreach ($units as $ukey => $uvalue){ ?>
                                                  <option value="<?= $uvalue["id_unit"] ?>" <?php if($uvalue["id_unit"]==$value->id_unit) { echo "selected";}?>><?php print_r($uvalue["nama_unit"]);?></option>
                                              <?php }  ?>
                                          </select>
                                          </div>
                                      </div>
                                      <div class="form-group mt-lg">
                                          <label class="col-sm-3 control-label">Tahun</label>
                                          <div class="col-sm-9">
                                              <input type="text" name="tahun" class="form-control" pattern="[0-9]{4}" placeholder="Unit Pemilik Risiko" required="required" value="<?php echo $value->tahun;?>">
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
                          <div class="modal fade" id="modal-hapus-<?php echo $value->id_manajemen_risiko;?>">
                            <form id="demo-form" class="form-horizontal mb-lg" action="<?php echo base_url();?>index.php/manajemen_risiko/delete/<?php echo $value->id_manajemen_risiko;?>"  method="post" enctype="multipart/form-data">
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
                                                <label>Nama UPR</label>
                                              </div>
                                              <div class="col-md-1">
                                                :
                                              </div>
                                              <div class="col-md-5">
                                                  <?php echo $value->nama_unit?>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-1">
                                              </div>
                                              <div class="col-md-4">
                                                <label>Tahun</label>
                                              </div>
                                              <div class="col-md-1">
                                                :
                                              </div>
                                              <div class="col-md-5">
                                                  <?php echo $value->tahun?>
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
                      <?php } ?>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
