<header class="page-header">
    <h2>Manajemen Risiko</h2>

    <!-- <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.html">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Dashboard</span></li>
        </ol>

    </div> -->
</header>

<!-- start: page -->
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
            <div class="panel-heading">
                <h4>Manajemen Risiko</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 text-right" style="margin-bottom:12px;">
                        <a class="modal-with-form btn btn-success" href="#addForm"><i class="fa fa-plus"></i></a>
                            <div id="addForm" class="modal-block modal-block-primary mfp-hide">
                                <section class="panel">
                                    <header class="panel-heading">
                                        <h2 class="panel-title">Tambah Unit Pemilik Risiko</h2>
                                    </header>
                                    <div class="panel-body">
                                        <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                                            <div class="form-group mt-lg">
                                                <label class="col-sm-3 control-label">Nama UPR</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" class="form-control" placeholder="Unit Pemilik Risiko" required="">
                                                </div>
                                            </div>
                                            <div class="form-group mt-lg">
                                                <label class="col-sm-3 control-label">Tahun</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" class="form-control" placeholder="Unit Pemilik Risiko" required="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <footer class="panel-footer">
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                <button class="btn btn-primary modal-confirm">Submit</button>
                                                <button class="btn btn-default modal-dismiss">Cancel</button>
                                            </div>
                                        </div>
                                    </footer>
                                </section>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Unit Kerja</th>
                                        <th class="text-center">Tahun</th>
                                        <th class="text-center">Identifikasi</th>
                                        <th class="text-center">Analisis</th>
                                        <th class="text-center">RTP</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Inspektorat</td>
                                        <td>2019</td>
                                        <td class="text-center"><a href="<?php echo base_url();?>index.php/manajemen_risiko/sasaran_organisasi" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                        <td class="text-center"><a href="<?php echo base_url();?>index.php/manajemen_risiko/analisis_evaluasi" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                        <td class="text-center"><a href="<?php echo base_url();?>index.php/manajemen_risiko/rtp_risiko" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                        <td class="text-center">
                                            <a class="mb-xs mt-xs mr-xs btn btn-info" href="<?php echo base_url();?>index.php/manajemen_risiko/info_risiko"><i class="fa fa-info"></i></a>
                                            <a href="#editForm" class="mb-xs mt-xs mr-xs btn btn-warning modal-with-form"><i class="fa fa-pencil"></i></a>
                                                <div id="editForm" class="modal-block modal-block-primary mfp-hide">
                                                    <section class="panel">
                                                        <header class="panel-heading">
                                                            <h2 class="panel-title">Edit Unit Pemilik Risiko</h2>
                                                        </header>
                                                        <div class="panel-body">
                                                            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                                                                <div class="form-group mt-lg">
                                                                    <label class="col-sm-3 control-label">Nama UPR</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="name" class="form-control" placeholder="Unit Pemilik Risiko" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mt-lg">
                                                                    <label class="col-sm-3 control-label">Tahun</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="name" class="form-control" placeholder="Unit Pemilik Risiko" required="">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <footer class="panel-footer">
                                                            <div class="row">
                                                                <div class="col-md-12 text-right">
                                                                    <button class="btn btn-primary modal-confirm">Submit</button>
                                                                    <button class="btn btn-default modal-dismiss">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </footer>
                                                    </section>
                                                </div>
                                            <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</div>

<!-- end: page -->