<header class="page-header">
    <h2>Manajemen Risiko</h2>

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
    <div class="right-wrapper pull-right" style="margin-right:12px;">
        <ol class="breadcrumbs">
            <li>
                <a href="<?php echo base_url();?>">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Dashboard</span></li>
            <li><a href="<?php echo base_url();?>index.php/manajemen_risiko"><span>Manajemen Risiko</span></a></li>
            <li><a href="#"><span>Laporan</span></a></li>
        </ol>

    </div>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-lg-12 col-xl-12">
        <section class="panel">
            <div class="panel-heading">
                <h4>Laporan</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                    <form action="<?php echo base_url();?>index.php/manajemen_risiko/savelaporan" method="post">
                    <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label for="">Tanggal</label>
                            </div>
                            <div class="col-sm-1">
                                :
                            </div>
                            <div class="col-sm-4">
                                <input type="date" name="tanggal" class="form-control" id="" value="<?php echo $laporan ? $laporan[0]->tanggal:'';?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label for="">Nomor</label>
                            </div>
                            <div class="col-sm-1">
                                :
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="nomor" id="" class="form-control" value="<?php echo $laporan ? $laporan[0]->nomor:'';?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label for="">Tujuan/Sasaran</label>
                            </div>
                            <div class="col-sm-1">
                                :
                            </div>
                            <div class="col-sm-4">
                                <textarea name="tujuan_sasaran" id="" cols="30" rows="10" class="form-control"><?php echo $laporan ? $laporan[0]->tujuan_sasaran:'';?></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label for="">Simpulan</label>
                            </div>
                            <div class="col-sm-1">
                                :
                            </div>
                            <div class="col-sm-4">
                                <textarea name="simpulan" id="" cols="30" rows="10" class="form-control"><?php echo $laporan ? $laporan[0]->simpulan:'';?></textarea>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-3">
                                <label for="">Lampiran</label>
                            </div>
                            <div class="col-sm-1">
                                :
                            </div>
                            <div class="col-sm-4">
                                2(dua) berkas
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="">Hal</label>
                            </div>
                            <div class="col-sm-1">
                                :
                            </div>
                            <div class="col-sm-4">
                                Laporan Penerapan Manajemen Risiko Tahun …..
                            </div>
                        </div> -->
                        <!-- <div class="row">
                            <div class="col-sm-12">Yth.</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">Inspektorat Kementerian PANRB</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">Di Jakarta</div>
                        </div>
                        <br> -->
                        
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="<?php echo base_url();?>index.php/manajemen_risiko/printlaporan/<?php echo $id_manajemen_risiko;?>" class="btn btn-default">Print</a>
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
