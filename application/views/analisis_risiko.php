<header class="page-header">
    <h2>Analisis dan Evaluasi Risiko</h2>
    <div class="right-wrapper pull-right" style="margin-right:12px;">
        <ol class="breadcrumbs">
            <li>
                <a href="<?php echo base_url();?>">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Dashboard</span></li>
            <li><a href="<?php echo base_url();?>index.php/manajemen_risiko"><span>Manajemen Risiko</span></a></li>
            <li><a href="#"><span>Analisis Risiko</span></a></li>
        </ol>

    </div>
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
</header>

<!-- start: page -->
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
            <div class="panel-heading">
                <h4>Analisis dan Evaluasi Risiko Organisasi</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                      <form action="<?= base_url('index.php/analisis_risiko/save')?>" method="post">
                        <input type="hidden" value="<?= $id_mr ?>" name="id_mr">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" rowspan="2">No</th>
                                        <th class="text-center" colspan="4">Identifikasi</th>
                                        <th class="text-center" colspan="5">Hasil Analisis</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Pernyataan Risiko</th>
                                        <th class="text-center">Jenis Risiko</th>
                                        <th class="text-center">Penyebab Risiko</th>
                                        <th class="text-center">Probabilitas</th>
                                        <th class="text-center">Konsekuensi</th>
                                        <th class="text-center">Nilai Risiko</th>
                                        <th class="text-center">Tingkat Risiko</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  <?php
                                    $i=1;
                                    foreach ($risikos as $key => $value){ ?>
                                      <tr>
                                        <td><?=$i?></td>
                                        <td><?= $value->kejadian ?></td>
                                        <td><?= $value->kategori_risiko ?></td>
                                        <td><?= $value->penyebab ?></td>
                                        <td><select name="probabilitas_<?= $value->id_risiko ?>" id="" class="form-control">
                                            <option disabled="true" selected>Pilih Probabilitas</option>
                                            <option value="1" <?php if($value->level_kemungkinan == 1){echo "selected";} ?>>Hampir Tidak Terjadi (1)</option>
                                            <option value="2" <?php if($value->level_kemungkinan == 2){echo "selected";} ?>>Jarang Terjadi (2)</option>
                                            <option value="3" <?php if($value->level_kemungkinan == 3){echo "selected";} ?>>Kadang Terjadi (3)</option>
                                            <option value="4" <?php if($value->level_kemungkinan == 4){echo "selected";} ?>>Sering Terjadi (4)</option>
                                            <option value="5" <?php if($value->level_kemungkinan == 5){echo "selected";} ?>>Hampir Pasti Terjadi (5)</option>
                                        </select></td>
                                        <td><select name="konsekuensi_<?= $value->id_risiko ?>" id="" class="form-control">
                                            <option disabled="true" selected>Pilih Konsekuensi</option>
                                            <option value="1" <?php if($value->level_dampak == 1){echo "selected";} ?>>Tidak Signifikan (1)</option>
                                            <option value="2" <?php if($value->level_dampak == 2){echo "selected";} ?>>Minor (2)</option>
                                            <option value="3" <?php if($value->level_dampak == 3){echo "selected";} ?>>Moderat (3)</option>
                                            <option value="4" <?php if($value->level_dampak == 4){echo "selected";} ?>>Signifikan (4)</option>
                                            <option value="5" <?php if($value->level_dampak == 5){echo "selected";} ?>>Sangat Signifikan (5)</option>
                                        </select></td>
                                        <td class="text-center"><?php $besaran_risiko = $value->level_dampak * $value->level_kemungkinan; echo $besaran_risiko ?></td>
                                        <?php
                                          if($besaran_risiko > 12){
                                            echo '<td class="text-center" style="background:red;color:white">Risiko Tinggi</td>';
                                          }elseif($besaran_risiko > 4){
                                            echo '<td class="text-center" style="background:yellow">Risiko Sedang</td>';
                                          }elseif($besaran_risiko > 0){
                                            echo '<td class="text-center" style="background:grey;color:white">Risiko Rendah</td>';
                                          }else{
                                            echo '<td class="text-center"> - </td>';
                                          }
                                        ?>
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
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a href="#" class="btn btn-default">Print</a>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>

<!-- end: page -->
