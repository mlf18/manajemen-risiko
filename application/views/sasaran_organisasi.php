<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-8">
        <h1 class="m-0 text-dark">Manajemen Risiko Unit <?= $unit[0]->nama_unit?> Tahun <?= $unit[0]->tahun ?> </h1>
      </div><!-- /.col -->
      <div class="col-sm-4">
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

  <div class="col-12 ">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab"  href="<?php echo base_url('index.php/sasaran_organisasi/index/').$id_manajemen_risiko;?>" >Identifikasi Risiko</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab"  href="<?php echo base_url('index.php/analisis_risiko/index/').$id_manajemen_risiko;?>" >Analisis Risiko</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab"  href="<?php echo base_url("index.php/rencana_tindak_lanjut/index/").$id_manajemen_risiko;?>">Rencana Tindak Pengendalian</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab"  href="<?php echo base_url("index.php/manajemen_risiko/laporan/").$id_manajemen_risiko;?>" >Laporan</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                  </div>
                </div>

        <div class="card-body">
              <!-- start: page -->
              <div class="row">
                  <div class="col-md-12 col-lg-12 col-xl-12">
                      <section class="panel">
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-md-12 text-right" style="margin-bottom:12px;">
                                      <a class="modal-with-form btn btn-success" data-toggle="modal" data-target="#addSasaran" style="color:white"><i class="fa fa-plus"></i> Tambah Sasaran Organisasi</a>
                                      <!-- modal tambah sasaran -->
                                      <div class="modal fade" id="addSasaran">
                                        <form id="demo-form" class="form-horizontal mb-lg" action="<?php echo base_url();?>index.php/sasaran_organisasi/save"  method="post" enctype="multipart/form-data">
                                          <div class="modal-dialog">
                                            <div class="modal-content bg-info">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Tambah Sasaran</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span></button>
                                              </div>
                                              <div class="modal-body">
                                                <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                <div class="form-group mt-lg">
                                                  <div class="row">
                                                    <div class="col-sm-3 control-label">Nama Sasaran</div>
                                                    <div class="col-sm-9">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <input type="text" name="sasaran_organisasi[]" class="form-control" placeholder="Nama Sasaran" pattern=".{1,254}" required="">
                                                                <div id="sformTambahan"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12"><button class="btn btn-defult btn-sm" type="button" id="btnTSasaran"><i class="fa fa-plus"></i></button></div>
                                                        </div>
                                                    </div>
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
                                      <!-- /.modal tambah sasaran -->
                                  </div>
                              </div>
                              <div class="row">
                              <div class="col-md-12">
                                  <div class="table-responsive">
                                      <table class="table table-bordered bg-info" >
                                          <thead>
                                              <tr>
                                                  <th class="text-center">No</th>
                                                  <th class="text-center">Sasaran Organisasi</th>
                                                  <th class="text-center">Aksi</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                              foreach ($sasaran_model as $key => $value) {
                                                  # code...
                                          ?>
                                          <tr>
                                              <td><?php echo $key+1;?></td>
                                              <td>
                                                  <?php echo $value->sasaran_organisasi;?><br>
                                                  <button class="mb-xs mt-xs mr-xs btn btn-circle btn-default" type="button" onclick="toggleKegiatan(event,'tableKegiatan-<?php echo $value->id_sasaran_organisasi;?>')"><i class="fa fa-folder-open"></i></button>

                                                  <div id="tableKegiatan-<?php echo $value->id_sasaran_organisasi;?>" style="display:none;">
                                                  <div class="col-md-12 text-right" style="margin-bottom:12px;">
                                                      <a class="modal-with-form btn btn-success" data-toggle="modal" data-target="#raddForm-<?php echo $value->id_sasaran_organisasi;?>"><i class="fa fa-plus"></i></a>
                                                      <div class="modal fade" id="raddForm-<?php echo $value->id_sasaran_organisasi;?>" >
                                                        <form id="demo-form" class="form-horizontal mb-lg" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/indikator_sasaran/save">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content bg-info">
                                                              <div class="modal-header">
                                                                <h4 class="modal-title">Tambah Kegiatan</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span></button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <input type="hidden" name="id_sasaran_organisasi" value="<?php echo $value->id_sasaran_organisasi;?>">
                                                                <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                                <div class="row">
                                                                  <label class="col-sm-3 control-label">Kegiatan</label>
                                                                  <div class="col-sm-9">
                                                                      <div class="row">
                                                                          <div class="col-sm-12">
                                                                              <input type="text" name="indikator_organisasi[]" class="form-control" placeholder="Kegiatan" required="" pattern=.{1,799}>
                                                                              <div id="iformTambahan-<?php echo $value->id_sasaran_organisasi;?>"></div>
                                                                          </div>
                                                                      </div>
                                                                      <div class="row">
                                                                          <div class="col-sm-12"><button class="btn btn-defult btn-sm" type="button" onclick="tmbhIndikator('iformTambahan-<?php echo $value->id_sasaran_organisasi;?>')"><i class="fa fa-plus"></i></button></div>
                                                                      </div>
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
                                                  <table class="table table-bordered" style="background:#126b79">
                                                      <thead>
                                                          <tr>
                                                              <th class="text-center">No</th>
                                                              <th class="text-center">Kegiatan</th>
                                                              <th class="text-center">Aksi</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php
                                                          $indikator = $this->indikatororganisasi_model->get(array('id_sasaran_organisasi'=>$value->id_sasaran_organisasi));
                                                          foreach ($indikator as $ikey => $ivalue) {
                                                              # code...
                                                          ?>
                                                              <tr>
                                                                  <td><?php echo $ikey+1;?></td>
                                                                  <td>
                                                                      <?php echo $ivalue->indikator_organisasi;?><br>
                                                                      <button class="mb-xs mt-xs mr-xs btn btn-circle btn-default" type="button" onclick="toggleRisiko('tableRisiko-<?php echo $ivalue->id_indikator_organisasi;?>')"><i class="fa fa-folder-open"></i></button>
                                                                      <div id="tableRisiko-<?php echo $ivalue->id_indikator_organisasi;?>" style="display:none;">
                                                                                  <div class="col-md-12 text-right" style="margin-bottom:12px;">
                                                                                      <a class="modal-with-form btn btn-success" data-toggle="modal" data-target="#kaddForm--<?php echo $ivalue->id_indikator_organisasi;?>"><i class="fa fa-plus"></i></a>
                                                                                      <div class="modal fade" id="kaddForm--<?php echo $ivalue->id_indikator_organisasi;?>">
                                                                                        <form id="demo-form" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/risiko_organisasi/save" enctype="multipart/form-data">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content bg-info">
                                                                                              <div class="modal-header">
                                                                                                <h4 class="modal-title">Tambah Risiko</h4>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                  <span aria-hidden="true">&times;</span></button>
                                                                                              </div>
                                                                                              <div class="modal-body">
                                                                                                <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                                                                <input type="hidden" name="id_indikator_organisasi" value="<?php echo $ivalue->id_indikator_organisasi;?>">
                                                                                                <div class="form-group mt-lg">
                                                                                                    <label>Pernyataan Resiko</label>
                                                                                                    <input type="text" name="kejadian" class="form-control" placeholder="Nama Kejadian Resiko" required="">
                                                                                                </div>
                                                                                                <div class="form-group mt-lg">
                                                                                                    <label >Kategori Risiko</label>
                                                                                                    <select name="id_kategori" id="" class="form-control" required="">
                                                                                                        <option value="" selected disabled>Silahkan Pilih Kategori</option>
                                                                                                        <option value="0">Risiko Kebijakan/ Stratejik</option>
                                                                                                        <option value="1">Risiko Operasional</option>
                                                                                                        <option value="2">Risiko Kepatuhan</option>
                                                                                                        <option value="3">Risiko Finansial</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="form-group mt-lg">
                                                                                                    <label>Sumber</label>
                                                                                                    <select name="sumber" id="" class="form-control" required>
                                                                                                        <option value="" selected disabled>Silahkan Pilih</option>
                                                                                                        <option value="0">SDM</option>
                                                                                                        <option value="1">Material</option>
                                                                                                        <option value="2">Mesin/Alat</option>
                                                                                                        <option value="3">Metode</option>
                                                                                                        <option value="4">Anggaran</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="form-group mt-lg">
                                                                                                    <label>Tipe</label>
                                                                                                    <select name="tipe" id="" class="form-control" required>
                                                                                                        <option value="" selected disabled>Silahkan Pilih</option>
                                                                                                        <option value="0">Uncontrollable</option>
                                                                                                        <option value="1">Controllable</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="form-group mt-lg">
                                                                                                    <label>Uraian</label>
                                                                                                    <textarea name="penyebab" class="form-control" placeholder="Penyebab" required=""></textarea>
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
                                                                                      <!-- /.modal tambah sasaran -->
                                                                                      </div>
                                                                              <table class="table table-bordered" style="background:#4c757b">
                                                                                  <thead>
                                                                                      <tr>
                                                                                          <th class="text-center" rowspan="2">No</th>
                                                                                          <th class="text-center" rowspan="2">Pernyataan Resiko</th>
                                                                                          <th class="text-center" rowspan="2">Kategori Risiko</th>
                                                                                          <th class="text-center" colspan="3">Penyebab</th>
                                                                                          <th class="text-center" rowspan="2">Dampak</th>
                                                                                          <th class="text-center" rowspan="2">Pengendalian Yang Ada</th>
                                                                                          <th class="text-center" rowspan="2">Sisa Risiko</th>
                                                                                          <th class="text-center" rowspan="2">Aksi</th>
                                                                                      </tr>
                                                                                      <tr>
                                                                                          <th class="text-center">Sumber</th>
                                                                                          <th class="text-center">Tipe</th>
                                                                                          <th class="text-center">Uraian</th>
                                                                                      </tr>
                                                                                  </thead>
                                                                                  <tbody>

                                                                                  <?php
                                                                                  $risiko = $this->risiko_model->get(array('id_indikator_organisasi'=>$ivalue->id_indikator_organisasi));
                                                                                  foreach ($risiko as $rkey => $rvalue) {
                                                                                      # code...
                                                                                  ?>
                                                                                  <tr>
                                                                                          <td><?php echo $rkey+1;?></td>
                                                                                          <td><?php echo $rvalue->kejadian;?></td>
                                                                                          <td><?php echo kategoriRisiko($rvalue->id_kategori);?></td>
                                                                                          <td><?php echo sumberRisiko($rvalue->sumber);?></td>
                                                                                          <td><?php echo tipeRisiko($rvalue->tipe);?></td>
                                                                                          <td><?php echo nl2br($rvalue->penyebab);?></td>
                                                                                          <td class="text-center"><a href="<?php echo base_url();?>index.php/dampak_risiko/index/<?php echo $rvalue->id_risiko;?>" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                                                                          <td class="text-center"><a href="<?php echo base_url();?>index.php/pengendalian_risiko/index/<?php echo $rvalue->id_risiko;?>" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>

                                                                                          <td class="text-center"><?php echo $rvalue->sisa_risiko;?></td>
                                                                                          <td class="text-center">
                                                                                              <a data-toggle="modal" data-target="#reditForm-<?php echo $rvalue->id_risiko;?>" class="modal-with-form mb-xs mt-xs mr-xs btn btn-warning"><i class="fa fa-edit"></i></a>
                                                                                              <div id="reditForm-<?php echo $rvalue->id_risiko;?>" class="modal fade">
                                                                                                <form id="demo-form" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/risiko_organisasi/update/<?php echo $rvalue->id_risiko;?>" enctype="multipart/form-data">
                                                                                                  <div class="modal-dialog">
                                                                                                    <div class="modal-content bg-info">
                                                                                                      <div class="modal-header">
                                                                                                        <h4 class="modal-title">Edit Resiko</h4>
                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                          <span aria-hidden="true">&times;</span></button>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                        <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                                                                        <div class="form-group mt-lg">
                                                                                                            <label class="col-sm-3 control-label">Kejadian</label>
                                                                                                            <div class="col-sm-9">
                                                                                                                <input type="text" name="kejadian" class="form-control" placeholder="Nama Kejadian" required="" value="<?php echo $rvalue->kejadian;?>">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group mt-lg">
                                                                                                            <label class="col-sm-3 control-label">Kategori Risiko</label>
                                                                                                            <div class="col-sm-9">
                                                                                                                <select name="id_kategori" id="" class="form-control">
                                                                                                                    <option value="">Pilih Kategori</option>
                                                                                                                    <option value="0" <?php if ($rvalue->id_kategori==0) echo 'selected';?>>Risiko Kebijakan/ Stratejik</option>
                                                                                                                    <option value="1" <?php if ($rvalue->id_kategori==1) echo 'selected';?>>Risiko Operasional</option>
                                                                                                                    <option value="2" <?php if ($rvalue->id_kategori==2) echo 'selected';?>>Risiko Kepatuhan</option>
                                                                                                                    <option value="3" <?php if ($rvalue->id_kategori==3) echo 'selected';?>>Risiko Finansial</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group mt-lg">
                                                                                                            <label class="col-sm-3 control-label">Penyebab</label>
                                                                                                            <div class="col-sm-9">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group mt-lg">
                                                                                                            <label class="col-sm-3 control-label">Sumber</label>
                                                                                                            <div class="col-sm-9">
                                                                                                                <select name="sumber" id="" class="form-control" required>
                                                                                                                    <option value="" selected disabled>Silahkan Pilih</option>
                                                                                                                    <option value="0" <?php if ($rvalue->sumber==0) echo 'selected';?>>SDM</option>
                                                                                                                    <option value="1" <?php if ($rvalue->sumber==1) echo 'selected';?>>Material</option>
                                                                                                                    <option value="2" <?php if ($rvalue->sumber==2) echo 'selected';?>>Mesin/Alat</option>
                                                                                                                    <option value="3" <?php if ($rvalue->sumber==3) echo 'selected';?>>Metode</option>
                                                                                                                    <option value="4" <?php if ($rvalue->sumber==4) echo 'selected';?>>Anggaran</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group mt-lg">
                                                                                                            <label class="col-sm-3 control-label">Tipe</label>
                                                                                                            <div class="col-sm-9">
                                                                                                                <select name="tipe" id="" class="form-control" required>
                                                                                                                    <option value="" selected disabled>Silahkan Pilih</option>
                                                                                                                    <option value="0" <?php if ($rvalue->tipe==0) echo 'selected';?>>Uncontrollable</option>
                                                                                                                    <option value="1" <?php if ($rvalue->tipe==1) echo 'selected';?>>Controllable</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group mt-lg">
                                                                                                            <label class="col-sm-3 control-label">Uraian</label>
                                                                                                            <div class="col-sm-9">
                                                                                                                <textarea name="penyebab" class="form-control" placeholder="Penyebab" required="" ><?php echo $rvalue->penyebab;?></textarea>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="form-group mt-lg">
                                                                                                            <label class="col-sm-3 control-label">Sisa Risiko</label>
                                                                                                            <div class="col-sm-9">
                                                                                                                <input type="text" name="sisa_risiko" class="form-control" placeholder="Sisa Risiko">
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

                                                                                              <a data-toggle="modal" data-target="#rdeleteForm-<?php echo $ivalue->id_indikator_organisasi;?>" class="modal-with-form mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash"></i>&nbsp;</a>
                                                                                              <div class="modal fade" id="rdeleteForm-<?php echo $ivalue->id_indikator_organisasi;?>" >
                                                                                                <form action="<?php echo base_url();?>index.php/risiko_organisasi/delete/<?php echo $rvalue->id_risiko;?>" method="post">
                                                                                                  <div class="modal-dialog">
                                                                                                    <div class="modal-content bg-info">
                                                                                                      <div class="modal-header">
                                                                                                        <h5 class="modal-title">Apakah anda yakin akan menghapus Risiko ini?</h5>
                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                          <span aria-hidden="true">&times;</span></button>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                        <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                                                                        <input type="text" disabled name="kejadian" class="form-control" placeholder="Nama Kejadian" required="" value="<?php echo $rvalue->kejadian;?>">
                                                                                                        <input type="text" name="kejadian" class="form-control" placeholder="Nama Kejadian" required="" value="<?php echo $rvalue->kejadian;?>">
                                                                                                      </div>
                                                                                                      <div class="modal-footer justify-content-between">
                                                                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                                                                        <button type="submit" class="btn btn-outline-light">Delete</button>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                    <!-- /.modal-content -->
                                                                                                  </div>
                                                                                                  <!-- /.modal-dialog -->
                                                                                                </form>
                                                                                            </div>

                                                                                              </td>
                                                                                      </tr>
                                                                                  <?php
                                                                                  }
                                                                                  ?>
                                                                                  </tbody>
                                                                              </table>
                                                                      </div>
                                                                  </td>

                                                                  <td class="text-center">
                                                                      <a data-toggle="modal" data-target="#ieditForm-<?php echo $ivalue->id_indikator_organisasi;?>" class="modal-with-form mb-xs mt-xs mr-xs btn btn-warning"><i class="fa fa-edit"></i></a>
                                                                      <div class="modal fade" id="ieditForm-<?php echo $ivalue->id_indikator_organisasi;?>" >
                                                                        <form id="demo-form-<?php echo $ivalue->id_sasaran_organisasi;?>" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/indikator_sasaran/update/<?php echo $ivalue->id_indikator_organisasi;?>">
                                                                          <div class="modal-dialog">
                                                                            <div class="modal-content bg-info">
                                                                              <div class="modal-header">
                                                                                <h4 class="modal-title">Edit Kegiatan</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                  <span aria-hidden="true">&times;</span></button>
                                                                              </div>
                                                                              <div class="modal-body">
                                                                                <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                                                <div class="form-group mt-lg">
                                                                                    <label>Kegiatan</label>
                                                                                    <input type="text" name="indikator_organisasi" class="form-control" placeholder="Indikator" required="" value="<?php echo $ivalue->indikator_organisasi;?>" pattern=".{1,799}">
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
                                                                    <br/>
                                                                    <a data-toggle="modal" data-target="#ideleteForm-<?php echo $ivalue->id_indikator_organisasi;?>" class="modal-with-form mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash"></i>&nbsp;</a>
                                                                    <div class="modal fade" id="ideleteForm-<?php echo $ivalue->id_indikator_organisasi;?>" >
                                                                      <form action="<?php echo base_url();?>index.php/indikator_sasaran/delete/<?php echo $ivalue->id_indikator_organisasi;?>" method="post">
                                                                        <div class="modal-dialog">
                                                                          <div class="modal-content bg-info">
                                                                            <div class="modal-header">
                                                                              <h5 class="modal-title">Apakah anda yakin akan menghapus Kegiatan ini?</h5>
                                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                  <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                                                  <label>Kegiatan</label>
                                                                                  <input disabled type="text" name="indikator_organisasi" class="form-control" placeholder="Indikator" required="" value="<?php echo $ivalue->indikator_organisasi;?>" pattern=".{1,799}">
                                                                            </div>
                                                                            <div class="modal-footer justify-content-between">
                                                                              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                                              <button type="submit" class="btn btn-outline-light">Delete</button>
                                                                            </div>
                                                                          </div>
                                                                          <!-- /.modal-content -->
                                                                        </div>
                                                                        <!-- /.modal-dialog -->
                                                                      </form>
                                                                  </div>
                                                                  </td>
                                                              </tr>
                                                          <?php
                                                          }
                                                          ?>
                                                      </tbody>
                                                  </table>
                                          </div>
                                              </td>
                                              <td>
                                                  <a class="mb-xs mt-xs mr-xs btn btn-warning modal-with-form" data-toggle="modal" data-target="#editForm-<?php echo $value->id_sasaran_organisasi;?>"  style="color:black"><i class="fa fa-edit"></i></a>
                                                      <div class="modal fade" id="editForm-<?php echo $value->id_sasaran_organisasi;?>" >
                                                        <form id="demo-form-<?php echo $value->id_sasaran_organisasi;?>" class="form-horizontal mb-lg" action="<?php echo base_url();?>index.php/sasaran_organisasi/update/<?php echo $value->id_sasaran_organisasi;?>"  method="post" enctype="multipart/form-data">
                                                            <div class="modal-dialog">
                                                              <div class="modal-content bg-info">
                                                                <div class="modal-header">
                                                                  <h4 class="modal-title">Edit Sasaran</h4>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                  <div class="form-group mt-lg">
                                                                      <label>Nama Sasaran</label>
                                                                      <input type="text" name="sasaran_organisasi" class="form-control" placeholder="Nama Sasaran" pattern=".{1,254}" required="" value="<?php echo $value->sasaran_organisasi;?>">
                                                                  </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                                  <button type="submit" class="btn btn-outline-light">Submit</button>
                                                                </div>
                                                              </div>
                                                              <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                          </form>
                                                      </div>
                                                      <br/>
                                                      <a class="mb-xs mt-xs mr-xs btn btn-danger modal-with-form" data-toggle="modal" data-target="#deleteForm-<?php echo $value->id_sasaran_organisasi;?>"  style="color:white"><i class="fa fa-trash"></i>&nbsp;</a>
                                                              <div class="modal fade" id="deleteForm-<?php echo $value->id_sasaran_organisasi;?>" >
                                                                    <div class="modal-dialog">
                                                                      <div class="modal-content bg-danger">
                                                                        <div class="modal-header">
                                                                          <h5 class="modal-title">Apakah Anda Yakin Menghapus Sasaran Ini ?</h5>
                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                          <div class="form-group mt-lg">
                                                                              <label>Nama Sasaran</label>
                                                                              <input type="text" name="sasaran_organisasi" class="form-control" disabled value="<?php echo $value->sasaran_organisasi;?>">

                                                                          </div>
                                                                        </div>
                                                                        <div class="modal-footer justify-content-between">
                                                                          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                                          <form action="<?php echo base_url();?>index.php/sasaran_organisasi/delete/<?php echo $value->id_sasaran_organisasi;?>" method="post">
                                                                              <button type="submit" class="btn btn-outline-light">Hapus</button>
                                                                          </form>
                                                                        </div>
                                                                      </div>
                                                                      <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->

                                                              </div>

                                              </td>
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
                      </section>
                  </div>

              </div>

              <!-- end: page -->
        </div>
      </div>
    </div>
  </div>
</section>
  <?php
  function custom_footer(){
  ?>
  <script>
      $("#btnTSasaran").click(function(){
          $("#sformTambahan").append('<input type="text" name="sasaran_organisasi[]" class="form-control" placeholder="Nama Sasaran" pattern=".{1,254}">');
      });

      function toggleKegiatan(event,id) {
				var x = document.getElementById(id);
				if (x.style.display === "none") {
					x.style.display = "";
				} else {
					x.style.display = "none";
				}
			}

      function toggleRisiko(id) {
				var x = document.getElementById(id);
				var b = document.getElementById("bTogKegiatan");
				if (x.style.display === "none") {
					x.style.display = "";
				} else {
					x.style.display = "none";
				}
			}

      function tmbhIndikator(id){
				$("#"+id).append('<input type="text" name="indikator_organisasi[]" class="form-control" placeholder="Kegiatan" pattern=".{1,254}">');
			}


  </script>
  <?php
  }?>
