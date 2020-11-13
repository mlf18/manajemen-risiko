<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Benturan Kepentingan.xls");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-hover table-bordered" width="100%" border="1">
                            <thead>
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Unit Kerja</th>
                                <th>Uraian</th>
                                <th>Pelaku yang Terkait</th>
                                <th>Penyebab</th>
                                <th>Rencana Aksi</th>
                                <th>Tindak Lanjut</th>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($bks as $key => $value) {
                              if ($value->id_unit == $this->session->userdata('ses_id_unit') or $this->session->userdata('ses_id_unit') == 8) {?>
                                <tr>
                                    <td><?=$key+1?></td>
                                    <td><?=$value->tahun?></td>
                                    <td><?=$value->nama_unit?></td>
                                    <td><?=$value->uraian?></td>
                                    <td><?=$value->pelaku?></td>
                                    <td><?=$value->penyebab?></td>
                                    <td><?=$value->rencana_aksi?></td>
                                    <td><?=$value->tindak_lanjut?></td>
                            <?php
                              }
                            }
                            ?>
                            </tbody>
                        </table>
</body>
</html>