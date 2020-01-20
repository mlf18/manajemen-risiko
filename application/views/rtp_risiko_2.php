<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-8">
        <h1 class="m-0 text-dark">Rencana Tindak Pengendalian</h1>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <ol class="breadcrumb float-sm-right">
          <li>
              <a class="breadcrumb-item" href="<?php echo base_url();?>">
                  <i class="fa fa-home"> </i> /&nbsp;
              </a>
          </li>
          <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/manajemen_risiko"><span>Manajemen Risiko</span></a></li>
          <li class="breadcrumb-item active"><a  href="#"><span>RTP</span></a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->





  <div class="col-12 ">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link " id="custom-tabs-one-home-tab"  href="<?php echo base_url('index.php/sasaran_organisasi/index/').$id_mr;?>" >Identifikasi Risiko</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " id="custom-tabs-one-profile-tab"  href="<?php echo base_url('index.php/analisis_risiko/index/').$id_mr;?>" >Analisis Risiko</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-messages-tab"  href="<?php echo base_url("index.php/rencana_tindak_lanjut/index/").$id_mr;?>">Rencana Tindak Pengendalian</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab"  href="<?php echo base_url("index.php/manajemen_risiko/laporan/").$id_mr;?>" >Laporan</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">


                <div class="col-md-12">
                    <div style="overflow-x:auto;">
                      <form action="<?= base_url()?>index.php/rencana_tindak_lanjut/save" method="post" enctype="multipart/form-data">
                      <div class="col-md-12 text-right">
                          <button type="submit" class="btn btn-success">Simpan</button>
                          <a href="<?php echo base_url();?>index.php/rencana_tindak_lanjut/print_rtl/<?php echo $id_mr;?>" class="btn btn-primary" target="_blank">Print</a>
                      </div>
                        <br/>
                        <table class="table table-bordered table-hover bg-info" style="width:250%;max-width:250%;">
                            <thead>
                                <tr>
                                    <th>Nomor Rangking</th>
                                    <th>Pernyataan Risiko</th>
                                    <th>Jenis Risiko</th>
                                    <th>Nilai Risiko</th>
                                    <th width="20%">Identifikasi Pengendalian</th>
                                    <th width="30%">Perbaikan Pengendalian</th>
                                    <th width="10%">Jadwal Waktu</th>
                                    <th width="10%">Rencana Pembiayaan</th>
                                    <th width="10%">Keterangan(progress RTP)</th>
                                    <th width="20%">Pemilik Risiko</th>
                                </tr>
                            </thead>
                            <tbody>
                              <input type="hidden" name="id_mr" value="<?php echo $id_mr;?>">
                              <?php
                                $i=1;
                                foreach ($risikos as $key => $value){
                              ?>
                              <input type="hidden" name="<?= $value->id_risiko ?>[id_risiko]" value="<?php echo $value->id_risiko;?>">
                                  <tr>
                                    <td><?=$i?></td>
                                    <td><?= $value->kejadian ?></td>
                                    <td><?= $value->kategori_risiko ?></td>
                                    <?php
                                      if($value->besaran_risiko > 12){
                                        echo '<td class="text-center" style="background:red;color:white">'.$value->besaran_risiko.'</td>';
                                      }elseif($value->besaran_risiko > 4){
                                        echo '<td class="text-center" style="background:yellow">'.$value->besaran_risiko.'</td>';
                                      }elseif($value->besaran_risiko > 0){
                                        echo '<td class="text-center" style="background:grey;color:white">'.$value->besaran_risiko.'</td>';
                                      }else{
                                        echo '<td class="text-center"> - </td>';
                                      }
                                    ?>
                                    <td>
                                    <?php
                                    $pengendalian = $this->pengendalian_model->get(array('id_risiko'=>$value->id_risiko));
                                    foreach ($pengendalian as $key => $value) {
                                        # code...
                                        echo 1+$key.". ".$value->pengendalian."<br>";
                                    }
                                    ?>
                                    </td>
                                    <?php
                                        $rtl = $this->rtl_model->get(array('id_risiko'=>$value->id_risiko));
                                    ?>
                                    <td><textarea name="<?= $value->id_risiko ?>[perbaikanPengendalian]" class="form-control" rows="10" cols="30"><?php echo count($rtl) > 0 ? $rtl[0]->perbaikan_pengendalian:'';?></textarea></td>
                                    <td>
                                      Dari : <input type="month" name="<?= $value->id_risiko ?>[dari]" style="vertical-align:center;line-height: 20px;" class="form-control" value="<?php echo count($rtl) > 0 ? $rtl[0]->mulai:'';?>"><br>
                                      Sampai : <input type="month" name="<?= $value->id_risiko ?>[sampai]" style="vertical-align:center;line-height: 20px;" class="form-control" value="<?php echo count($rtl) > 0 ? $rtl[0]->selesai:'';?>">
                                    </td>
                                    <td><textarea name="<?= $value->id_risiko ?>[pembiayaan]"  class="form-control"  rows="10" cols="30"><?php echo count($rtl) > 0 ? $rtl[0]->pembiayaan:'';?></textarea></td>
                                    <td><textarea name="<?= $value->id_risiko ?>[keterangan]"  class="form-control"  rows="10" cols="30"><?php echo count($rtl) > 0 ? $rtl[0]->ket:'';?></textarea></td>
                                    <td><textarea name="<?= $value->id_risiko ?>[keterangan]"  class="form-control"  rows="10" cols="30"><?php echo count($rtl) > 0 ? $rtl[0]->pemilik_risiko:'';?></textarea></td>
                                  </tr>
                              <?php
                                $i++;
                                }
                              ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="<?php echo base_url();?>index.php/rencana_tindak_lanjut/print_rtl/<?php echo $id_mr;?>" class="btn btn-primary">Print</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>

</div>

<!-- end: page -->
