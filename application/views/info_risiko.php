<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1 class="m-0 text-dark">Manajemen Risiko</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li>
                        <a class="breadcrumb-item" href="<?php echo base_url();?>">
                            <i class="fa fa-home"> </i> /&nbsp;
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/manajemen_risiko"><span>Manajemen Risiko</span></a></li>
                    <li class="breadcrumb-item"><a href="#"><span>Rangkuman
          </span></a></li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- start: page -->

<section class="content">
    <div class="col-12 ">
        <div class="card">
            <div class="card-body">
                <section class="panel">
                    <div class="panel-heading">
                        <h4>Identifikasi Risiko</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-right" style="margin-bottom:12px;">
                            </div>
                        </div>
                        <div class="row">

                            <input type="hidden" name="id_mr" value="<?php echo $id_mr;?>">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center" rowspan="3">No</th>
                                                <th class="text-center" rowspan="3">Sasaran Organisasi</th>
                                                <th class="text-center" rowspan="3">Kegiatan</th>
                                                <th class="text-center" colspan="9">Daftar Risiko</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center" rowspan="2">No</th>
                                                <th class="text-center" rowspan="2">Pernyataan Resiko</th>
                                                <th class="text-center" rowspan="2">Kategori Risiko</th>
                                                <th class="text-center" colspan="3">Penyebab</th>
                                                <th class="text-center" rowspan="2">Dampak</th>
                                                <th class="text-center" rowspan="2">Pengendalian yang ada</th>
                                                <th class="text-center" rowspan="2">Sisa Risiko</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Sumber</th>
                                                <th class="text-center">Tipe</th>
                                                <th class="text-center">Uraian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $mr= $this->sasaranorganisasi_model->get(array('id_manajemen_risiko'=>$id_mr));
                                        foreach ($mr as $key => $value) {
                                            # code...
                                            $no_s = $key+1;
                                            $kegiatan = $this->indikatororganisasi_model->get(array('id_sasaran_organisasi'=>$value->id_sasaran_organisasi));
                                            $srow=0;
                                            foreach ($kegiatan as $ikey => $ivalue) {
                                                $risiko = $this->risiko_model->get(array('id_indikator_organisasi'=>$ivalue->id_indikator_organisasi));
                                                $jrisk =count($risiko);
                                                if(count($risiko) < 1){
                                                    $jrisk = 1;
                                                }

                                                $srow+=$jrisk;
                                            }
                                            if($srow <= 1){
                                                $srow=1;
                                            }
                                            echo "<tr>";
                                            echo "<td rowspan='$srow'>".$no_s."</td>";
                                            echo "<td rowspan='$srow'>".$value->sasaran_organisasi."</td>";
                                            foreach ($kegiatan as $ikey => $ivalue) {
                                                # code...
                                                $risiko = $this->risiko_model->get(array('id_indikator_organisasi'=>$ivalue->id_indikator_organisasi));
                                                $rrow = count($risiko);
                                                if(count($risiko) < 1){
                                                    $rrow = 1;
                                                }
                                                if($ikey > 0){
                                                    echo "<tr>";
                                                }
                                                echo "<td rowspan='".$rrow."'>$ivalue->indikator_organisasi</td>";
                                                if(count($risiko) < 1){
                                                    echo "<td colspan='10'></td>";
                                                    echo "</tr>";
                                                }
                                                foreach ($risiko as $rkey => $rvalue) {
                                                    # code...
                                                    $no_r = $rkey+1;
                                                    if($rkey > 0){
                                                        echo "<tr>";
                                                    }
                                                    echo "<td>$no_r</td>";
                                                    echo "<td>$rvalue->kejadian</td>";
                                                    echo "<td>".kategoriRisiko($rvalue->id_kategori)."</td>";
                                                    echo "<td>".sumberRisiko($rvalue->sumber)."</td>";
                                                    echo "<td>".tipeRisiko($rvalue->tipe)."</td>";
                                                    echo "<td>".$rvalue->penyebab."</td>";
                                                    echo "<td>";
                                                    $dampak = $this->dampak_model->get(array('id_risiko'=>$rvalue->id_risiko));
                                                    foreach ($dampak as $dkey => $dvalue) {
                                                        # code...
                                                        echo 1+$dkey."."." ".$dvalue->dampak."<br>";
                                                    }
                                                    echo "</td>";
                                                    echo "<td>";
                                                    $peng = $this->pengendalian_model->get(array('id_risiko'=>$rvalue->id_risiko));
                                                    foreach ($peng as $pkey => $pvalue) {
                                                        # code...
                                                        echo 1+$pkey.".".$pvalue->pengendalian;
                                                    }
                                                    echo "</td>";
                                                    echo "<td>".$rvalue->sisa_risiko."</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            if(count($kegiatan) < 1){
                                                echo "<td colspan='11'></td>";
                                            }
                                            echo "</tr>";
                                        }
                                    ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <div class="panel-heading">
                                <h4>Analisis dan Evaluasi Risiko</h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 text-right" style="margin-bottom:12px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" rowspan="2">No</th>
                                                        <th class="text-center" colspan="4">Daftar Risiko</th>
                                                        <th class="text-center" colspan="5">Hasil Analisis</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center">Kategori Risiko</th>
                                                        <th class="text-center">Kejadian Risiko</th>
                                                        <th class="text-center">Penyebab Risiko</th>
                                                        <th class="text-center">Dampak Risiko</th>
                                                        <th class="text-center">Level Kemungkinan</th>
                                                        <th class="text-center">Level Dampak</th>
                                                        <th class="text-center">Besaran Risiko</th>
                                                        <th class="text-center">Level Risiko</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                            $risiko = $this->analisis_risiko_model->get_risiko(array('manajemen_risiko.id_manajemen_risiko'=>$id_mr));
                                            foreach ($risiko as $rkey => $rvalue) {
                                    ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo 1+$rkey;?>
                                                            </td>
                                                            <td>
                                                                <?php echo kategoriRisiko($rvalue->id_kategori);?>
                                                            </td>
                                                            <td>
                                                                <?php echo $rvalue->kejadian;?>
                                                            </td>
                                                            <td>
                                                                <?php echo sumberRisiko($rvalue->sumber);?>
                                                            </td>
                                                            <td>
                                                                <?php
                                        foreach ($dampak as $dkey => $dvalue) {
                                            # code...
                                            echo 1+$dkey."."." ".$dvalue->dampak."<br>";
                                        }?>
                                                            </td>
                                                            <td>
                                                                <?php echo levelKemungkinan($rvalue->level_kemungkinan);?>
                                                            </td>
                                                            <td>
                                                                <?php echo levelDampak($rvalue->level_dampak);?>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php echo $rvalue->level_kemungkinan*$rvalue->level_dampak;?>
                                                            </td>
                                                            <?php
                                        if($rvalue->level_kemungkinan*$rvalue->level_dampak<=4){
                                            echo '<td class="text-center bg-secondary">Risiko Rendah</td>';
                                        }elseif($rvalue->level_kemungkinan*$rvalue->level_dampak>4 && $rvalue->level_kemungkinan*$rvalue->level_dampak<=12){
                                            echo '<td class="text-center bg-warning">Risiko Sedang</td>';
                                        }elseif($rvalue->level_kemungkinan*$rvalue->level_dampak>4 && $rvalue->level_kemungkinan*$rvalue->level_dampak>12){
                                            echo '<td class="text-center bg-danger">Risiko Tinggi</td>';
                                        }
                                        ?>
                                                        </tr>
                                                        <?php
                                    }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <div class="panel-heading">
                                <h4>Rencana Tindak Pengendalian</h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 text-right" style="margin-bottom:12px;">
                                    </div>
                                </div>
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

                                                    <?php
                                $i=1;
                                foreach ($risikos as $key => $value){
                              ?>

                                                        <tr>
                                                            <td>
                                                                <?=$i?>
                                                            </td>
                                                            <td>
                                                                <?= $value->kejadian ?>
                                                            </td>
                                                            <td>
                                                                <?= $value->kategori_risiko ?>
                                                            </td>
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
                                                                    <td>
                                                                        <?php echo count($rtl) > 0 ? $rtl[0]->perbaikan_pengendalian:'';?>
                                                                    </td>
                                                                    <td>
                                                                        Dari :
                                                                        <?php echo count($rtl) > 0 ? $rtl[0]->mulai:'';?>
                                                                            <br> Sampai :
                                                                            <?php echo count($rtl) > 0 ? $rtl[0]->selesai:'';?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo count($rtl) > 0 ? $rtl[0]->pembiayaan:'';?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo count($rtl) > 0 ? $rtl[0]->ket:'';?>
                                                                    </td>
                                                        </tr>
                                                        <?php
                                $i++;
                                }
                              ?>

                                                </tbody>
                                            </table>
                                            <!-- <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" rowspan="2">No</th>
                                    <th class="text-center" rowspan="2">Kejadian</th>
                                    <th class="text-center" colspan="3">Level Risiko Saat Ini</th>
                                    <th class="text-center" colspan="4">Rencana Tindak Pengendalian</th>
                                    <th class="text-center" colspan="3">Level Risiko Harapan</th>
                                </tr>
                                <tr>
                                    <th class="text-center">LK</th>
                                    <th class="text-center">LD</th>
                                    <th class="text-center">BR</th>
                                    <th class="text-center">Opsi Penganan Risiko</th>
                                    <th class="text-center">Rencana Aksi Pengendalian Risiko</th>
                                    <th class="text-center">Output</th>
                                    <th class="text-center">Target</th>
                                    <th class="text-center">LK</th>
                                    <th class="text-center">LD</th>
                                    <th class="text-center">BR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="">1</td>
                                    <td class="">Kesalahan unit kerja dalam menafsirkan rekomendasi yang diberikan oleh BPK</td>
                                    <td class="">Jarang Terjadi</td>
                                    <td class="">Sangat Signifikan</td>
                                    <td class="bg-danger">21</td>
                                    <td>
                                        Menerima Risiko
                                    </td>
                                    <td>Rencana Aksi</td>
                                    <td>Output</td>
                                    <td>Target</td>
                                    <td>
                                        Jarang Terjadi
                                    </td>
                                        <td>Moderat</td>
                                    <td class="bg-success">11</td>
                                </tr>
                            </tbody>
                        </table> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <canvas id="myChart" width="20" height="13"></canvas>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="btn btn-default"><i class="fa fa-print"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end: page -->