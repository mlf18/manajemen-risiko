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
    </style>
</head>

<body style="text-align: justify;">
    <table width="100%">
        <tr>
            <td width="20%">Nomor</td>
            <td width="1%">:</td>
            <td><?php echo $laporan ? $laporan[0]->nomor:''?></td>
            <td><?php echo $laporan ? date("d-m-Y", strtotime($laporan[0]->tanggal)):''?></td>
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
                                    <td>Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor xx Tahun 2019 tentang Manajemen Risiko di Lingkungan Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi.</td>
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
                        <td>Telah dilakukan pemetaan risiko atas seluruh/sebagian tujuan/sasaran yang ingin dicapai. Tujuan/sasaran kegiatan yang belum dilakukan pemetaan risiko adalah: <?php echo $laporan ? $laporan[0]->tujuan_sasaran:''?> Data pemetaan risiko terlampir pada petunjuk teknis identifikasi, analisis risiko dan evaluasi risiko.</td>
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
            <td>(bisa dalam bentuk saran, capaian keberhasilan, perbaikan kedepan)</td>
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

    <div class="pagebreak"></div>
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
                <th rowspan="2">Pernyataan Risiko</th>
                <th rowspan="2">Jenis Risiko</th>
                <th colspan="2">Penyebab</th>
                <th rowspan="2">Probabilitas</th>
                <th rowspan="2">Konsekuensi</th>
                <th rowspan="2">Nilai Risiko</th>
                <th rowspan="2">Tingkat Risiko</th>
            </tr>
            <tr>
                <th>Internal</th>
                <th>Eksternal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>

    <div class="pagebreak"></div>
    <table width="100%">
        <tr>
            <td width="80%"></td>
            <td>Lampiran II</td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td style="text-align:center;">Rencana Tindak Pengendalian</td>
        </tr>
    </table>

    <table width="100%" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Pernyataan Risiko</th>
                <th>Jenis Risiko</th>
                <th>Nilai Risiko</th>
                <th>Identifikasi Pengendalian</th>
                <th>Perbaikan Pengendalian</th>
                <th>Jadwal Waktu</th>
                <th>Rencana Pembiayaan</th>
                <th>Ket</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>
</body>

</html>