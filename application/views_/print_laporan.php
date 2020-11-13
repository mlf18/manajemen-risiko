<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    @media print {
        .pagebreak { clear: both;page-break-after: always; } /* page-break-after works, as well */
    }
    @page { size : portrait }
    @page rotated { size : landscape }
    .landscape { page : rotated }
    body{
        font-family: "Times New Roman", Times, serif;
        margin: 2.5cm;
        font-size: 10pt;
    }
    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }
    </style>
    <script>
    window.print();
    </script>
</head>

<body style="text-align: justify;">
    <table width="100%">
        <tr>
            <td width="20%">Nomor</td>
            <td width="1%">:</td>
            <td><?php echo $laporan ? $laporan[0]->nomor:''?></td>
            <td><?php echo $laporan ? tgl_indo($laporan[0]->tanggal):''?></td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>:</td>
            <td>2(dua) berkas</td>
        </tr>
        <tr>
            <td>Hal</td>
            <td>:</td>
            <td>Laporan Penerapan Manajemen Risiko Tahun <?php echo $laporan ? $laporan[0]->tahun:''?></td>
        </tr>
    </table>
    <br>
    <br>
    <table width="100%">
        <tr>
            <td>Yth.</td>
        </tr>
        <tr>
            <td>
                <strong>Inspektur Kementerian PANRB</strong>
            </td>
        </tr>
        <tr>
            <td>Di Jakarta</td>
        </tr>
    </table>
    <br>
    <table width="100%">
        <tr>
            <td>
                <p style="text-indent:50px;">Dengan ini kami sampaikan laporan Penerapan Manajemen Risiko di Lingkungan <?php echo $laporan ? $laporan[0]->nama_unit:''?>, Tahun <?php echo $laporan ? $laporan[0]->tahun:''?> sebagai berikut.</p>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td width="2%">1. </td>
            <td>Pendahuluan</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <table width="100%">
                    <tr>
                        <td width="2%">a.</td>
                        <td>Dasar Hukum</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <table width="100%">
                                <tr>
                                    <td style="vertical-align: text-top;">1)</td>
                                    <td>Peraturan Pemerintah RI Nomor 60 Tahun 2008 tentang Sistem Pengendalian Intern Pemerintah, dalam Pasal 13 ayat (1) dan (2) terkait Penilaian Risiko,</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: text-top;">2)</td>
                                    <td>Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 17 Tahun 2019 tentang Manajemen Risiko di Lingkungan Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi.</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="2%">b.</td>
                        <td>Tujuan</td>
                    </tr>
                    <tr>
                        <td width="2%"></td>
                        <td>Melaporkan proses manajemen risiko sejak penilaian sampai dengan penanganan risiko di lingkungan unit kerja.</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="2%">2. </td>
            <td>Hasil Pemetaan</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <table width="100%">
                    <tr>
                        <td width="2%">a.</td>
                        <td>Pemetaan Risiko</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Telah dilakukan pemetaan risiko atas seluruh/sebagian tujuan/sasaran yang ingin dicapai. <br>Tujuan/sasaran kegiatan yang belum dilakukan pemetaan risiko adalah: <?php echo $laporan ? $laporan[0]->tujuan_sasaran:''?> Data pemetaan risiko terlampir pada petunjuk teknis identifikasi, analisis risiko dan evaluasi risiko.</td>
                    </tr>
                    <tr>
                        <td width="2%">b.</td>
                        <td>RTP</td>
                    </tr>
                    <tr>
                        <td width="2%"></td>
                        <td>Telah dikembangkan opsi rencana tindak pengendalian untuk mengelola risiko dan dilakukan monitoring atas progresnya. Data RTP dan progress terlampir pada petunjuk teknis penerapan risiko.</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="2%">3. </td>
            <td>Simpulan</td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $laporan ? $laporan[0]->simpulan:''?></td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td>
                <p style="text-indent:50px;">Demikian kami sampaikan, atas perhatian dan kerjasamanya, kami mengucapkan terimakasih</p>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td width="50%"></td>
            <td><?php echo $laporan ? ($laporan[0]->id_unit == 5) || ($laporan[0]->id_unit == 6) || ($laporan[0]->id_unit == 7) ? "Kepala " :'':'';?><?php echo $laporan ? $laporan[0]->nama_unit:''?></td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table width="100%">
        <tr>
            <td width="50%"></td>
            <td>....................................................................</td>
        </tr>
    </table>

    <!-- <div class="pagebreak"></div>
    <table width="100%">
        <tr>
            <td width="80%"></td>
            <td>Lampiran I</td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td style="text-align:center;">Analisis Risiko</td>
        </tr>
    </table>

    <table width="100%" border="1">
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Sasaran</th>
                <th rowspan="2">Kegiatan</th>
                <th rowspan="2">Pernyataan Risiko</th>
                <th rowspan="2">Kategori Risiko</th>
                <th colspan="3">Penyebab</th>
                <th rowspan="2">Dampak</th>
                <th rowspan="2">Pengendalian Yang Ada</th>
                <th rowspan="2">Sisa Risiko</th>
            </tr>
            <tr>
                <th>Sumber</th>
                <th>Tipe</th>
                <th>Uraian</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($sasaran as $key => $value) {
        $zero = 0;
        ?>
            <tr>
                <td rowspan="<?= $value->jmlrisiko ?>"><?= $key+1?></td>
                <td rowspan="<?= $value->jmlrisiko ?>"><?=$value->sasaran_organisasi?></td>
                <?php foreach($value->indikator as $indikator){
                if($zero==1){
                    echo '<tr>';
                }
                $zero1 = 0;
                ?>
                <td rowspan="<?=count($indikator->risiko)?>"><?= $indikator->indikator_organisasi?></td>
                <?php foreach($indikator->risiko as $risiko){
                if($zero1==1){
                    echo '<tr>';
                }    
                ?>
                    <td><?=$risiko->kejadian?></td>
                    <td><?=kategoriRisiko($risiko->id_kategori)?></td>
                    <td><?=sumberRisiko($risiko->sumber)?></td>
                    <td><?=tipeRisiko($risiko->tipe)?></td>
                    <td><?=$risiko->penyebab?></td>
                    <td>
                        <?php foreach($risiko->dampak as $dampak){
                            echo $dampak->dampak;
                            echo "<br>";
                        }?>
                    </td>
                    <td>
                        <?php foreach($risiko->pengendalian as $pengendalian){
                            echo $pengendalian->pengendalian;
                            echo "<br>";
                        }?>
                    </td>
                    <td><?=$risiko->sisa_risiko?></td>
                <?php 
                if($zero1==1){
                    echo '</tr>';
                }
                if($zero1 == 0){
                    echo '</tr>';
                    $zero1=1;
                }
                    } 
                ?>
                <?php 
                if($zero==1){
                    echo '</tr>';
                }
                if($zero==0){
                    echo '</tr>';
                    $zero=1;
                }
                } 
                ?>
                
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>

    <div class="pagebreak"></div>
    <table width="100%">
        <tr>
            <td width="80%"></td>
            <td>Lampiran II</td>
        </tr>
    </table>
    <div class="landscape">
    <table width="100%">
        <tr>
            <td style="text-align:center;">Rencana Tindak Pengendalian</td>
        </tr>
    </table>

    <table border="1" width="100%">
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
            <?php
            $i=1;
            foreach ($risikos as $key => $value){
            ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?= $value->kejadian ?></td>
                    <td><?= $value->kategori_risiko?></td>
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
                    <?php foreach ($value->pengendalian as $no_p => $pengendalian) {
                        # code...
                        echo 1+$no_p.'. '.$pengendalian->pengendalian.'<br>';
                    }?>
                    </td>
                    <td><?= isset($value->rtl->perbaikan_pengendalian)?$value->rtl->perbaikan_pengendalian:''?></td>
                    <td><?= isset($value->rtl->mulai)? 'Dari : '.$value->rtl->mulai:''?><br><?= isset($value->rtl->selesai)? 'Sampai : '.$value->rtl->selesai:''?></td>
                    <td><?= isset($value->rtl->pembiayaan)?$value->rtl->pembiayaan:''?></td>
                    <td><?= isset($value->rtl->keterangan)?$value->rtl->keterangan:''?></td>
                    <td><?= isset($value->rtl->pemilik_risiko)?$value->rtl->pemilik_risiko:''?></td>
                </tr>
            <?php
            $i++;
            }
            ?>

        </tbody>
    </table>
    </div> -->
</body>

</html>