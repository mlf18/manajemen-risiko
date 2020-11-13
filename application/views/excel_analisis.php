<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Analsis Risiko.xls");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analisis Risiko</title>
</head>
<body>
    <table width="100%" border=1>
        <thead>
            <tr>
                <th class="text-center" rowspan="2">No</th>
                <th class="text-center" colspan="4">Identifikasi</th>
                <th class="text-center" colspan="3">Hasil Analisis</th>
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
                <td><?php echo levelKemungkinan($value->level_kemungkinan).' ('.$value->level_kemungkinan.')';?></td>
                <td><?php echo levelDampak($value->level_dampak).' ('.$value->level_dampak.')';?></td>
                <td class="text-center"><?php $besaran_risiko = $value->level_dampak * $value->level_kemungkinan; echo $besaran_risiko ?></td>
                <?php
                    if($besaran_risiko > 12){
                        echo '<td class="text-center" style="background-color:red;color:white">Risiko Tinggi</td>';
                      }elseif($besaran_risiko > 4 && $besaran_risiko <= 12){
                        echo '<td class="text-center" style="background-color:yellow; color:black">Risiko Sedang</td>';
                      }elseif($besaran_risiko > 0 && $besaran_risiko <= 4){
                        echo '<td class="text-center" style="background-color:grey;color:black">Risiko Rendah</td>';
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
</body>
</html>