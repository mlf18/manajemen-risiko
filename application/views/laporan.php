<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-8">
        <h1 class="m-0 text-dark">Laporan</h1>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <ol class="breadcrumb float-sm-right">
          <li>
              <a class="breadcrumb-item" href="<?php echo base_url();?>">
                  <i class="fa fa-home"> </i> /&nbsp;
              </a>
          </li>
          <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/manajemen_risiko"><span>Manajemen Risiko</span></a></li>
          <li class="breadcrumb-item active"><a href="#"><span>Laporan</span></a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- start: page -->
<section class="content">

  <div class="col-12 ">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link " id="custom-tabs-one-home-tab"  href="<?php echo base_url('index.php/sasaran_organisasi/index/').$id_manajemen_risiko;?>" >Identifikasi Risiko</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " id="custom-tabs-one-profile-tab"  href="<?php echo base_url('index.php/analisis_risiko/index/').$id_manajemen_risiko;?>" >Analisis Risiko</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab"  href="<?php echo base_url("index.php/rencana_tindak_lanjut/index/").$id_manajemen_risiko;?>">Rencana Tindak Pengendalian</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-settings-tab"  href="<?php echo base_url("index.php/manajemen_risiko/laporan/").$id_manajemen_risiko;?>" >Laporan</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                            <form action="<?php echo base_url();?>index.php/manajemen_risiko/savelaporan" method="post">
                              <div class="col-md-12 text-right">
                                  <button type="submit" class="btn btn-success">Simpan</button>
                                  <a href="<?php echo base_url();?>index.php/manajemen_risiko/printlaporan/<?php echo $id_manajemen_risiko;?>" class="btn btn-warning" target="_blank">Print</a>
                              </div>
                              <br/>
                              <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                              <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label for="">Tanggal</label>
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="date" name="tanggal" class="form-control" id="" value="<?php echo $laporan ? $laporan[0]->tanggal:'';?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label for="">Nomor</label>
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="nomor" id="" class="form-control" value="<?php echo $laporan ? $laporan[0]->nomor:'';?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label for="">Tujuan/Sasaran</label>
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea name="tujuan_sasaran" id="" cols="30" rows="10" class="form-control"><?php echo $laporan ? $laporan[0]->tujuan_sasaran:'';?></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label for="">Simpulan</label>
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea name="simpulan" id="" cols="30" rows="10" class="form-control"><?php echo $laporan ? $laporan[0]->simpulan:'';?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <a href="<?php echo base_url();?>index.php/manajemen_risiko/printlaporan/<?php echo $id_manajemen_risiko;?>" class="btn btn-warning">Print</a>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="col-md-6">
                      <br/><br/><br/><br/>
                      <img src="<?php echo base_url("assets/images/laporan.png") ?>" width="100%">
                    </div>
                  </div>
                </div>
            </div>
        </section>
    </div>

</div>

<!-- end: page -->
