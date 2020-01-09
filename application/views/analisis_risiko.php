<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-8">
        <h1 class="m-0 text-dark">Analisis dan Evaluasi Risiko</h1>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <ol class="breadcrumb float-sm-right">
          <li>
              <a class="breadcrumb-item" href="<?php echo base_url();?>">
                  <i class="fa fa-home"> </i> /&nbsp;
              </a>
          </li>
          <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/manajemen_risiko"><span>Manajemen Risiko</span></a></li>
          <li class="breadcrumb-item"><a href="#"><span>Analisis Risiko</span></a></li>
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
                    <a class="nav-link " id="custom-tabs-one-home-tab"  href="<?php echo base_url('index.php/sasaran_organisasi/index/').$id_mr;?>" >Identifikasi Risiko</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-profile-tab"  href="<?php echo base_url('index.php/analisis_risiko/index/').$id_mr;?>" >Analisis Risiko</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab"  href="<?php echo base_url("index.php/rencana_tindak_lanjut/index/").$id_mr;?>">Rencana Tindak Pengendalian</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab"  href="<?php echo base_url("index.php/manajemen_risiko/laporan/").$id_mr;?>" >Laporan</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">

        <section class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                      <form action="<?= base_url('index.php/analisis_risiko/save')?>" method="post">
                        <input type="hidden" value="<?= $id_mr ?>" name="id_mr">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover bg-info">
                                <thead>
                                    <tr >
                                        <th class="text-center" rowspan="2">No</th>
                                        <th class="text-center" colspan="4">Identifikasi</th>
                                        <th class="text-center" colspan="5">Hasil Analisis</th>
                                    </tr>
                                    <tr >
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
                                        <td style="text-align:center"><?php //$value->level_kemungkinan ?>
                                          <select name="probabilitas_<?= $value->id_risiko ?>" id="" class="form-control">
                                            <option disabled="true" selected>Pilih Probabilitas</option>
                                            <option value="1" <?php if($value->level_kemungkinan == 1){echo "selected";} ?>>Hampir Tidak Terjadi (1)</option>
                                            <option value="2" <?php if($value->level_kemungkinan == 2){echo "selected";} ?>>Jarang Terjadi (2)</option>
                                            <option value="3" <?php if($value->level_kemungkinan == 3){echo "selected";} ?>>Kadang Terjadi (3)</option>
                                            <option value="4" <?php if($value->level_kemungkinan == 4){echo "selected";} ?>>Sering Terjadi (4)</option>
                                            <option value="5" <?php if($value->level_kemungkinan == 5){echo "selected";} ?>>Hampir Pasti Terjadi (5)</option>
                                        </select></td>
                                        <td style="text-align:center"><?php //$value->level_dampak ?>
                                          <select name="konsekuensi_<?= $value->id_risiko ?>" id="" class="form-control">
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
                                            echo '<td class="text-center" style="background:yellow; color:black">Risiko Sedang</td>';
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
