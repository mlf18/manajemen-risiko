<header class="page-header">
    <h2>Manajemen Risiko</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="<?php echo base_url();?>">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Dashboard</span></li>
            <li><span>Manajemen Risiko</span></li>
            <li><span>Sasaran Organisasi</span></li>
            <li><span>Indikator Sasaran</span></li>
            <li><span>Risiko</span></li>
        </ol>

    </div>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
            <div class="panel-heading">
                <h4>Risiko Organisasi</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 text-right" style="margin-bottom:12px;">
                    <a class="modal-with-form btn btn-success" href="#addForm"><i class="fa fa-plus"></i></a>
                        <div id="addForm" class="modal-block modal-block-primary mfp-hide">
                            <section class="panel">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Tambah Risiko</h2>
                                </header>
                                <form id="demo-form" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/risiko_organisasi/save" enctype="multipart/form-data">
                                <input type="hidden" name="id_indikator_organisasi" value="<?php echo $id_indikator_organisasi;?>">
                                <div class="panel-body">
                                        <div class="form-group mt-lg">
                                            <label class="col-sm-3 control-label">Kejadian</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="kejadian" class="form-control" placeholder="Nama Kejadian" required="">
                                            </div>
                                        </div>
                                        <div class="form-group mt-lg">
                                            <label class="col-sm-3 control-label">Kategori Risiko</label>
                                            <div class="col-sm-9">
                                                <select name="id_kategori" id="" class="form-control" required="">
                                                    <option value="" selected disabled>Pilih Kategori</option>
                                                    <option value="0">Risiko Kebijakan</option>
                                                    <option value="1">Risiko Operasional</option>
                                                    <option value="2">Risiko Kepatuhan</option>
                                                    <option value="3">Risiko Finansial</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mt-lg">
                                            <label class="col-sm-3 control-label">Penyebab</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="penyebab" class="form-control" placeholder="Penyebab" required="" pattern="{,254}">
                                            </div>
                                        </div>
                                        <div class="form-group mt-lg">
                                            <label class="col-sm-3 control-label">Dampak</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="dampak" class="form-control" placeholder="Dampak" required="" pattern="{,254}">
                                            </div>
                                        </div>
                                    
                                </div>
                                <footer class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary">Submit</button>
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
                                    <th class="text-center">Kejadian</th>
                                    <th class="text-center">Kategori Risiko</th>
                                    <th class="text-center">Penyebab</th>
                                    <th class="text-center">Dampak</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($risiko as $key => $value) {
                                # code...
                            ?>
                            <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $value->kejadian;?></td>
                                    <td><?php echo $value->id_kategori;?></td>
                                    <td><?php echo $value->penyebab;?></td>
                                    <td><?php echo $value->dampak;?></td>
                                    <td class="text-center">
                                        <a  class="modal-with-form mb-xs mt-xs mr-xs btn btn-warning" href="#editForm"><i class="fa fa-pencil"></i></a>
                                        <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                            <div id="editForm" class="modal-block modal-block-primary mfp-hide">
                                                <section class="panel">
                                                    <header class="panel-heading">
                                                        <h2 class="panel-title">Edit Risiko</h2>
                                                    </header>
                                                    <form id="demo-form" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/risiko_organisasi/update/<?php echo $value->id_risiko;?>" enctype="multipart/form-data">
                                                    <div class="panel-body">
                                                        
                                                            <div class="form-group mt-lg">
                                                                <label class="col-sm-3 control-label">Kejadian</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="kejadian" class="form-control" placeholder="Nama Kejadian" required="" value="<?php echo $value->kejadian;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-lg">
                                                                <label class="col-sm-3 control-label">Kategori Risiko</label>
                                                                <div class="col-sm-9">
                                                                    <select name="id_kategori" id="" class="form-control">
                                                                        <option value="">Pilih Kategori</option>
                                                                        <option value="0" <?php if ($value->id_kategori==0) echo 'selected';?>>Risiko Kebijakan</option>
                                                                        <option value="1" <?php if ($value->id_kategori==1) echo 'selected';?>>Risiko Operasional</option>
                                                                        <option value="2" <?php if ($value->id_kategori==2) echo 'selected';?>>Risiko Kepatuhan</option>
                                                                        <option value="3" <?php if ($value->id_kategori==3) echo 'selected';?>>Risiko Finansial</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-lg">
                                                                <label class="col-sm-3 control-label">Penyebab</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="penyebab" class="form-control" placeholder="Penyebab" required="" value="<?php echo $value->penyebab;?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-lg">
                                                                <label class="col-sm-3 control-label">Dampak</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="dampak" class="form-control" placeholder="Dampak" required="" value="<?php echo $value->dampak;?>">
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
                                </tr>
                            <?php
                            }
                            ?>
                                <!-- <tr>
                                    <td>1</td>
                                    <td>Kesalahan unit kerja dalam menafsirkan rekomendasi yang diberikan oleh BPK</td>
                                    <td>Risiko Kepatuhan</td>
                                    <td>Keterbatasan pemahaman SDM</td>
                                    <td>Penurunan Kinerja</td>
                                    <td class="text-center">
                                        <a  class="modal-with-form mb-xs mt-xs mr-xs btn btn-warning" href="#editForm"><i class="fa fa-pencil"></i></a>
                                        <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                            <div id="editForm" class="modal-block modal-block-primary mfp-hide">
                                                <section class="panel">
                                                    <header class="panel-heading">
                                                        <h2 class="panel-title">Edit Risiko</h2>
                                                    </header>
                                                    <div class="panel-body">
                                                        <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                                                            <div class="form-group mt-lg">
                                                                <label class="col-sm-3 control-label">Kejadian</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="kejadian" class="form-control" placeholder="Nama Kejadian" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-lg">
                                                                <label class="col-sm-3 control-label">Kategori Risiko</label>
                                                                <div class="col-sm-9">
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="">Pilih Kategori</option>
                                                                        <option value="">Risiko Kebijakan</option>
                                                                        <option value="">Risiko Operasional</option>
                                                                        <option value="">Risiko Kepatuhan</option>
                                                                        <option value="">Risiko Finansial</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-lg">
                                                                <label class="col-sm-3 control-label">Penyebab</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="penyebab" class="form-control" placeholder="Penyebab" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-lg">
                                                                <label class="col-sm-3 control-label">Dampak</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="dampak" class="form-control" placeholder="Dampak" required="">
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
                                </tr> -->
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