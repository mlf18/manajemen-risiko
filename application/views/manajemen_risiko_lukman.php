
<!-- start: page -->
<div class="row">
    <div class="col-md-12 col-lg-12 col-xl-12">
        <section class="panel">
            <div class="panel-heading">
                <h4></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 text-right" style="margin-bottom:12px;">
                        <a class="modal-with-form btn btn-success" href="#addForm"><i class="fa fa-plus"></i></a>
                            <div id="addForm" class="modal-block modal-block-primary mfp-hide ">
                                <section class="panel">
                                    <header class="panel-heading">
                                        <h2 class="panel-title">Tambah Unit Pemilik Risiko</h2>
                                    </header>
                                    <form id="demo-form" class="form-horizontal mb-lg" action="<?php echo base_url();?>index.php/manajemen_risiko/save" method="post" enctype="multipart/form-data">
                                    <div class="panel-body">
                                            <div class="form-group mt-lg">
                                                <label class="col-sm-3 control-label">Nama UPR</label>
                                                <div class="col-sm-9">
                                                    <!--<input type="text"  class="form-control" placeholder="Unit Pemilik Risiko" required="required">-->
                                                    <select name="id_upr" class="form-control">
                                                      <?php foreach ($units as $key => $value){ ?>
                                                          <option value="<?= $value["id_unit"] ?>"><?php print_r($value["nama_unit"]);?></option>
                                                      <?php }  ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mt-lg">
                                                <label class="col-sm-3 control-label">Tahun</label>
                                                <div class="col-sm-9">
                                                    <input type="text" style="width:90%" name="tahun" pattern="[0-9]{4}" class="form-control" placeholder="Tahun" required="required">
                                                </div>
                                            </div>
                                    </div>
                                    <footer class="panel-footer">
                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                            <!-- <input type="submit" value="Submit" class="btn btn-primary"> -->
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                                <button class="btn btn-default modal-dismiss">Cancel</button>
                                            </div>
                                        </div>
                                    </footer>
                                    </form>
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
                                        <th class="text-center">Laporan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($manajemen_risiko as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?php echo $key+1;?></td>
                                        <td><?php echo $value->nama_unit?></td>
                                        <td><?php echo $value->tahun;?></td>
                                        <td class="text-center"><a href="<?php echo base_url();?>index.php/sasaran_organisasi/index/<?php echo $value->id_manajemen_risiko;?>" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                        <td class="text-center"><a href="<?php echo base_url();?>index.php/analisis_risiko/index/<?php echo $value->id_manajemen_risiko;?>" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                        <td class="text-center"><a href="<?php echo base_url();?>index.php/rencana_tindak_lanjut/index/<?php echo $value->id_manajemen_risiko;?>" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                        <td class="text-center"><a href="<?php echo base_url();?>index.php/laporan/index/<?php echo $value->id_manajemen_risiko;?>" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                        <td class="text-center">
                                            <a class="mb-xs mt-xs mr-xs btn btn-info" href="<?php echo base_url();?>index.php/manajemen_risiko/info_risiko/<?php echo $value->id_manajemen_risiko;?>"><i class="fa fa-info"></i></a>
                                            <a href="#editForm-<?php echo $value->id_manajemen_risiko;?>" class="mb-xs mt-xs mr-xs btn btn-warning modal-with-form"><i class="fa fa-pencil"></i></a>
                                                <div id="editForm-<?php echo $value->id_manajemen_risiko;?>" class="modal-block modal-block-primary mfp-hide">
                                                    <section class="panel">
                                                        <header class="panel-heading">
                                                            <h2 class="panel-title">Edit Unit Pemilik Risiko</h2>
                                                        </header>
                                                        <form id="demo-form" class="form-horizontal mb-lg" action="<?php echo base_url();?>index.php/manajemen_risiko/update/<?php echo $value->id_manajemen_risiko;?>"  method="post" enctype="multipart/form-data">
                                                        <div class="panel-body">
                                                                <div class="form-group mt-lg">
                                                                    <label class="col-sm-3 control-label">Nama UPR</label>
                                                                    <div class="col-sm-9">
                                                                    <select name="id_upr" class="form-control">
                                                                        <?php foreach ($units as $ukey => $uvalue){ ?>
                                                                            <option value="<?= $uvalue["id_unit"] ?>" <?php if($uvalue["id_unit"]==$value->id_unit) { echo "selected";}?>><? print_r($uvalue["nama_unit"]);?></option>
                                                                        <?php }  ?>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mt-lg">
                                                                    <label class="col-sm-3 control-label">Tahun</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="tahun" class="form-control" pattern="[0-9]{4}" placeholder="Unit Pemilik Risiko" required="required" value="<?php echo $value->tahun;?>">
                                                                    </div>
                                                                </div>

                                                        </div>
                                                        <footer class="panel-footer">
                                                            <div class="row">
                                                                <div class="col-md-12 text-right">
                                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                                    <button class="btn btn-default modal-dismiss">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </footer>
                                                        </form>
                                                    </section>
                                                </div>
                                                <form method="post" action="<?php echo base_url();?>index.php/manajemen_risiko/delete/<?php echo $value->id_manajemen_risiko;?>">
                                                    <button type="submit" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                                </form>
                                    </tr>
                                    <!-- <tr>
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
                                    </tr> -->
                                    <?php } ?>
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
