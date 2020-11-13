<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=nama_filenya.xls");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Identifikasi Risiko</title>
</head>
<body>
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
</body>
</html>