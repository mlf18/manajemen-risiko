<header class="page-header">
    <h2>Manajemen Risiko</h2>

    <!-- <div class="right-wrapper pull-right" style="margin-right:12px;">
        <ol class="breadcrumbs">
            <li>
                <a href="index.html">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Dashboard</span></li>
        </ol>

    </div> -->
    <div class="right-wrapper pull-right" style="margin-right:12px;">
        <ol class="breadcrumbs">
            <li>
                <a href="<?php echo base_url();?>">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Dashboard</span></li>
            <li><a href="<?php echo base_url();?>index.php/manajemen_risiko"><span>Manajemen Risiko</span></a></li>
            <li><a href="#"><span>Rencana Tindak Pengendalian</span></a></li>
        </ol>

    </div>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-lg-12 col-xl-12">
        <section class="panel">
            <div class="panel-heading">
                <h4>Rencana Tindak Pengendalian Risiko</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                <div class="col-md-12">
                    <div style="overflow-x:auto;">
                        <table class="table table-bordered table-hover" style="width:250%;max-width:250%;">
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
                              <form action="<?= base_url()?>index.php/rencana_tindak_lanjut/save" method="post" enctype="multipart/form-data">
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
                            <a href="#" class="btn btn-default">Print</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>

</div>

<!-- end: page -->
