<header class="page-header">
    <h2>Manajemen Risiko</h2>

    <!-- <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.html">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Dashboard</span></li>
        </ol>

    </div> -->
</header>

<!-- start: page -->
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
            <div class="panel-heading">
                <h4>Rencana Tindak Pengendalian Risiko</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nomor Rangking</th>
                                    <th>Pernyataan Risiko</th>
                                    <th>Jenis Risiko</th>
                                    <th>Nilai Risiko</th>
                                    <th>Identifikasi Pengendalian</th>
                                    <th>Perbaikan Pengendalian</th>
                                    <th>Jadwal Waktu</th>
                                    <th>Rencana Pembiayaan</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                              <form action="<?= base_url()?>index.php/rencana_tindak_lanjut/save" method="post">
                              <?php
                                $i=1;
                                foreach ($risikos as $key => $value){
                              ?>
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
                                    <td></td>
                                    <td><textarea name="perbaikanPengendalian_<?= $value->id_resiko ?>"></textarea></td>
                                    <td>
                                      Dari : <input type="month" name="dari_<?= $value->id_resiko ?>" style="vertical-align:center;line-height: 20px;"><br>
                                      Sampai : <input type="month" name="sampai_<?= $value->id_resiko ?>" style="vertical-align:center;line-height: 20px;">
                                    </td>
                                    <td><textarea name="pembiayaan_<?= $value->id_resiko ?>"></textarea></td>
                                    <td><textarea name="keterangan_<?= $value->id_resiko ?>"></textarea></td>
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
                            <button type="button" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>

</div>

<!-- end: page -->
