<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    @media print{@page {size: landscape}}
        table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }
    </style>
</head>
<body>
    <table width="100%" border=1>
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
                <td><?php echo levelKemungkinan($value->level_kemungkinan).' ('.$value->level_kemungkinan.')';?></td>
                <td><?php echo levelDampak($value->level_dampak).' ('.$value->level_dampak.')';?></td>
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
</body>
</html>