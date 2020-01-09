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
    body{
        font-family: "Times New Roman", Times, serif;
        margin: 2.5cm;
        font-size: 10pt;
    }
    </style>
    <script>
    window.print();
    </script>
</head>
<body>
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
</body>
</html>