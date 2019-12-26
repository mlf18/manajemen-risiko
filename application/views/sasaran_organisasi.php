<header class="page-header">
    <h2>Manajemen Risiko</h2>

    <div class="right-wrapper pull-right" style="margin-right:12px;">
        <ol class="breadcrumbs">
            <li>
                <a href="<?php echo base_url();?>">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Dashboard</span></li>
            <li><a href="<?php echo base_url();?>index.php/manajemen_risiko"><span>Manajemen Risiko</span></a></li>
            <li><a href="#"><span>Sasaran Organisasi</span></a></li>
        </ol>
    </div>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
            <div class="panel-heading">
                <h4>Sasaran Organisasi</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 text-right" style="margin-bottom:12px;">
                        <a class="modal-with-form btn btn-success" href="#addForm"><i class="fa fa-plus"></i></a>
                        <div id="addForm" class="modal-block modal-block-primary mfp-hide">
                            <section class="panel">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Tambah Sasaran Organisasi</h2>
                                </header>
                                <form id="demo-form" class="form-horizontal mb-lg" action="<?php echo base_url();?>index.php/sasaran_organisasi/save" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                <div class="panel-body">
                                        <div class="form-group mt-lg">
                                            <label class="col-sm-3 control-label">Nama Sasaran</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <input type="text" name="sasaran_organisasi[]" class="form-control" placeholder="Nama Sasaran" pattern=".{1,254}" required="">
                                                        <div id="sformTambahan"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><button class="btn btn-defult btn-sm" type="button" id="btnTSasaran"><i class="fa fa-plus"></i></button></div>
                                                </div>
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
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Sasaran Organisasi</th>
                                    
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($sasaran_model as $key => $value) {
                                    # code...
                            ?>
                            <tr>
                                <td><?php echo $key+1;?></td>
                                <td>
                                    <?php echo $value->sasaran_organisasi;?><br>
                                    <button class="mb-xs mt-xs mr-xs btn btn-circle btn-default" type="button" onclick="toggleKegiatan(event,'tableKegiatan-<?php echo $value->id_sasaran_organisasi;?>')"><i class="fa fa-folder-open"></i></button>
                                        
                                    <div id="tableKegiatan-<?php echo $value->id_sasaran_organisasi;?>" style="display:none;">
                                    <div class="col-md-12 text-right" style="margin-bottom:12px;">
                                        <a class="modal-with-form btn btn-success" href="#raddForm-<?php echo $value->id_sasaran_organisasi;?>"><i class="fa fa-plus"></i></a>
                                        <div id="raddForm-<?php echo $value->id_sasaran_organisasi;?>" class="modal-block modal-block-primary mfp-hide">
                                            <section class="panel">
                                                <header class="panel-heading">
                                                    <h2 class="panel-title">Tambah Kegiatan</h2>
                                                </header>
                                                
                                                <div class="panel-body">
                                                <form id="demo-form" class="form-horizontal mb-lg" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/indikator_sasaran/save">
                                                        <input type="hidden" name="id_sasaran_organisasi" value="<?php echo $value->id_sasaran_organisasi;?>">
                                                        <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                        <div class="form-group mt-lg">
                                                            <label class="col-sm-3 control-label">Kegiatan</label>
                                                            <div class="col-sm-9">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="indikator_organisasi[]" class="form-control" placeholder="Kegiatan" required="" pattern=.{1,799}>
                                                                        <div id="iformTambahan-<?php echo $value->id_sasaran_organisasi;?>"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12"><button class="btn btn-defult btn-sm" type="button" onclick="tmbhIndikator('iformTambahan-<?php echo $value->id_sasaran_organisasi;?>')"><i class="fa fa-plus"></i></button></div>
                                                                </div>
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
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Kegiatan</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $indikator = $this->indikatororganisasi_model->get(array('id_sasaran_organisasi'=>$value->id_sasaran_organisasi));
                                            foreach ($indikator as $ikey => $ivalue) {
                                                # code...
                                            ?>
                                                <tr>
                                                    <td><?php echo $ikey+1;?></td>
                                                    <td>
                                                        <?php echo $ivalue->indikator_organisasi;?><br>
                                                        <button class="mb-xs mt-xs mr-xs btn btn-circle btn-default" type="button" onclick="toggleRisiko('tableRisiko-<?php echo $ivalue->id_indikator_organisasi;?>')"><i class="fa fa-folder-open"></i></button>
                                                        <div id="tableRisiko-<?php echo $ivalue->id_indikator_organisasi;?>" style="display:none;">
                                        <div class="col-md-12 text-right" style="margin-bottom:12px;">
                                            <a class="modal-with-form btn btn-success" href="#kaddForm--<?php echo $ivalue->id_indikator_organisasi;?>"><i class="fa fa-plus"></i></a>
                                                <div id="kaddForm--<?php echo $ivalue->id_indikator_organisasi;?>" class="modal-block modal-block-primary mfp-hide">
                                                    <section class="panel">
                                                        <header class="panel-heading">
                                                            <h2 class="panel-title">Tambah Risiko</h2>
                                                        </header>
                                                        <form id="demo-form" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/risiko_organisasi/save" enctype="multipart/form-data">
                                                        <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                        <input type="hidden" name="id_indikator_organisasi" value="<?php echo $ivalue->id_indikator_organisasi;?>">
                                                        <div class="panel-body">
                                                                <div class="form-group mt-lg">
                                                                    <label class="col-sm-3 control-label">Pernyataan Resiko</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="kejadian" class="form-control" placeholder="Nama Kejadian Resiko" required="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mt-lg">
                                                                    <label class="col-sm-3 control-label">Kategori Risiko</label>
                                                                    <div class="col-sm-9">
                                                                        <select name="id_kategori" id="" class="form-control" required="">
                                                                            <option value="" selected disabled>Silahkan Pilih Kategori</option>
                                                                            <option value="0">Risiko Kebijakan/ Stratejik</option>
                                                                            <option value="1">Risiko Operasional</option>
                                                                            <option value="2">Risiko Kepatuhan</option>
                                                                            <option value="3">Risiko Finansial</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="form-group mt-lg">
                                                                    <label class="col-sm-3 control-label">Penyebab</label>
                                                                    <div class="col-sm-9">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mt-lg">
                                                                    <label class="col-sm-3 control-label">Sumber</label>
                                                                    <div class="col-sm-9">
                                                                        <select name="sumber" id="" class="form-control" required>
                                                                            <option value="" selected disabled>Silahkan Pilih</option>
                                                                            <option value="0">SDM</option>
                                                                            <option value="1">Material</option>
                                                                            <option value="2">Mesin/Alat</option>
                                                                            <option value="3">Metode</option>
                                                                            <option value="4">Anggaran</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mt-lg">
                                                                    <label class="col-sm-3 control-label">Tipe</label>
                                                                    <div class="col-sm-9">
                                                                        <select name="tipe" id="" class="form-control" required>
                                                                            <option value="" selected disabled>Silahkan Pilih</option>
                                                                            <option value="0">Uncontrollable</option>
                                                                            <option value="1">Controllable</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mt-lg">
                                                                    <label class="col-sm-3 control-label">Uraian</label>
                                                                    <div class="col-sm-9">
                                                                        <textarea name="penyebab" class="form-control" placeholder="Penyebab" required=""></textarea>
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
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center" rowspan="2">No</th>
                                                <th class="text-center" rowspan="2">Pernyataan Resiko</th>
                                                <th class="text-center" rowspan="2">Kategori Risiko</th>
                                                <th class="text-center" colspan="3">Penyebab</th>
                                                <th class="text-center" rowspan="2">Dampak</th>
                                                <th class="text-center" rowspan="2">Pengendalian Yang Ada</th>
                                                <th class="text-center" rowspan="2">Sisa Risiko</th>
                                                <th class="text-center" rowspan="2">Aksi</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Sumber</th>
                                                <th class="text-center">Tipe</th>
                                                <th class="text-center">Uraian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php
                                        $risiko = $this->risiko_model->get(array('id_indikator_organisasi'=>$ivalue->id_indikator_organisasi));
                                        foreach ($risiko as $rkey => $rvalue) {
                                            # code...
                                        ?>
                                        <tr>
                                                <td><?php echo $rkey+1;?></td>
                                                <td><?php echo $rvalue->kejadian;?></td>
                                                <td><?php echo kategoriRisiko($rvalue->id_kategori);?></td>
                                                <td><?php echo sumberRisiko($rvalue->sumber);?></td>
                                                <td><?php echo tipeRisiko($rvalue->tipe);?></td>
                                                <td><?php echo nl2br($rvalue->penyebab);?></td>
                                                <td class="text-center"><a href="<?php echo base_url();?>index.php/dampak_risiko/index/<?php echo $rvalue->id_risiko;?>" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                                <td class="text-center"><a href="<?php echo base_url();?>index.php/pengendalian_risiko/index/<?php echo $rvalue->id_risiko;?>" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                                
                                                <td class="text-center"><?php echo $rvalue->sisa_risiko;?></td>
                                                <td class="text-center">
                                                    <a href="#reditForm-<?php echo $rvalue->id_risiko;?>" class="modal-with-form mb-xs mt-xs mr-xs btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                    <form action="<?php echo base_url();?>index.php/risiko_organisasi/delete/<?php echo $rvalue->id_risiko;?>" method="post">
                                                    <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                        <button type="submit" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                                    </form>
                                                    </td>
                                                    <div id="reditForm-<?php echo $rvalue->id_risiko;?>" class="modal-block modal-block-primary mfp-hide">
                                                    
                                                            <section class="panel">
                                                                <header class="panel-heading">
                                                                    <h2 class="panel-title">Edit Risiko</h2>
                                                                </header>
                                                                <form id="demo-form" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/risiko_organisasi/update/<?php echo $rvalue->id_risiko;?>" enctype="multipart/form-data">
                                                                <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                                    <div class="panel-body">
                                                                    
                                                                            <div class="form-group mt-lg">
                                                                                <label class="col-sm-3 control-label">Kejadian</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" name="kejadian" class="form-control" placeholder="Nama Kejadian" required="" value="<?php echo $rvalue->kejadian;?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-lg">
                                                                                <label class="col-sm-3 control-label">Kategori Risiko</label>
                                                                                <div class="col-sm-9">
                                                                                    <select name="id_kategori" id="" class="form-control">
                                                                                        <option value="">Pilih Kategori</option>
                                                                                        <option value="0" <?php if ($rvalue->id_kategori==0) echo 'selected';?>>Risiko Kebijakan/ Stratejik</option>
                                                                                        <option value="1" <?php if ($rvalue->id_kategori==1) echo 'selected';?>>Risiko Operasional</option>
                                                                                        <option value="2" <?php if ($rvalue->id_kategori==2) echo 'selected';?>>Risiko Kepatuhan</option>
                                                                                        <option value="3" <?php if ($rvalue->id_kategori==3) echo 'selected';?>>Risiko Finansial</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-lg">
                                                                                <label class="col-sm-3 control-label">Penyebab</label>
                                                                                <div class="col-sm-9">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-lg">
                                                                                <label class="col-sm-3 control-label">Sumber</label>
                                                                                <div class="col-sm-9">
                                                                                    <select name="sumber" id="" class="form-control" required>
                                                                                        <option value="" selected disabled>Silahkan Pilih</option>
                                                                                        <option value="0" <?php if ($rvalue->sumber==0) echo 'selected';?>>SDM</option>
                                                                                        <option value="1" <?php if ($rvalue->sumber==1) echo 'selected';?>>Material</option>
                                                                                        <option value="2" <?php if ($rvalue->sumber==2) echo 'selected';?>>Mesin/Alat</option>
                                                                                        <option value="3" <?php if ($rvalue->sumber==3) echo 'selected';?>>Metode</option>
                                                                                        <option value="4" <?php if ($rvalue->sumber==4) echo 'selected';?>>Anggaran</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-lg">
                                                                                <label class="col-sm-3 control-label">Tipe</label>
                                                                                <div class="col-sm-9">
                                                                                    <select name="tipe" id="" class="form-control" required>
                                                                                        <option value="" selected disabled>Silahkan Pilih</option>
                                                                                        <option value="0" <?php if ($rvalue->tipe==0) echo 'selected';?>>Uncontrollable</option>
                                                                                        <option value="1" <?php if ($rvalue->tipe==1) echo 'selected';?>>Controllable</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group mt-lg">
                                                                                <label class="col-sm-3 control-label">Uraian</label>
                                                                                <div class="col-sm-9">
                                                                                    <textarea name="penyebab" class="form-control" placeholder="Penyebab" required="" ><?php echo $rvalue->penyebab;?></textarea>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group mt-lg">
                                                                                <label class="col-sm-3 control-label">Sisa Risiko</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" name="sisa_risiko" class="form-control" placeholder="Sisa Risiko">
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
                                                                    <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
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
                                                                                    <option value="">Risiko Kebijakan/ Stratejik</option>
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
                                                    </td>
                                                    
                                                    <td class="text-center">
                                                        <a href="#ieditForm-<?php echo $ivalue->id_indikator_organisasi;?>" class="modal-with-form mb-xs mt-xs mr-xs btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                        <form action="<?php echo base_url();?>index.php/indikator_sasaran/delete/<?php echo $ivalue->id_indikator_organisasi;?>" method="post">
                                                        <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                                        </form>
                                                        <div id="ieditForm-<?php echo $ivalue->id_indikator_organisasi;?>" class="modal-block modal-block-primary mfp-hide">
                                                            <section class="panel">
                                                                <header class="panel-heading">
                                                                    <h2 class="panel-title">Edit Kegiatan</h2>
                                                                </header>
                                                                <form id="demo-form-<?php echo $ivalue->id_sasaran_organisasi;?>" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/indikator_sasaran/update/<?php echo $ivalue->id_indikator_organisasi;?>">
                                                                <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                                <div class="panel-body">
                                                                        <div class="form-group mt-lg">
                                                                            <label class="col-sm-3 control-label">Kegiatan</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" name="indikator_organisasi" class="form-control" placeholder="Indikator" required="" value="<?php echo $ivalue->indikator_organisasi;?>" pattern=".{1,799}">
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
                                        </tbody>
                                    </table>
                            </div>
                                </td>
                                <!-- <td><a href="<?php echo base_url();?>index.php/indikator_sasaran/index/<?php echo $value->id_sasaran_organisasi;?>" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td> -->
                                <!-- <td></td> -->
                                <td>
                                <a href="#editForm-<?php echo $value->id_sasaran_organisasi;?>" class="mb-xs mt-xs mr-xs btn btn-warning modal-with-form"><i class="fa fa-pencil"></i></a>
                                        <div id="editForm-<?php echo $value->id_sasaran_organisasi;?>" class="modal-block modal-block-primary mfp-hide">
                                            <section class="panel">
                                                <header class="panel-heading">
                                                    <h2 class="panel-title">Edit Sasaran Organisasi</h2>
                                                </header>
                                                <form id="demo-form-<?php echo $value->id_sasaran_organisasi;?>" class="form-horizontal mb-lg" action="<?php echo base_url();?>index.php/sasaran_organisasi/update/<?php echo $value->id_sasaran_organisasi;?>"  method="post" enctype="multipart/form-data">
                                                <div class="panel-body">
                                                        <div class="form-group mt-lg">
                                                            <label class="col-sm-3 control-label">Nama Sasaran</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="sasaran_organisasi" class="form-control" placeholder="Nama Sasaran" pattern=".{1,254}" required="" value="<?php echo $value->sasaran_organisasi;?>">
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
                                        <form action="<?php echo base_url();?>index.php/sasaran_organisasi/delete/<?php echo $value->id_sasaran_organisasi;?>" method="post">
                                            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                                <!-- <tr>
                                    <td>1</td>
                                    <td>Efektifitas tindak lanjut hasil pengawasan</td>
                                    <td class="text-center"><a href="<?php echo base_url();?>index.php/manajemen_risiko/indikator_sasaran" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                    <td class="text-center">
                                        <a href="#editForm" class="mb-xs mt-xs mr-xs btn btn-warning modal-with-form"><i class="fa fa-pencil"></i></a>
                                        <div id="editForm" class="modal-block modal-block-primary mfp-hide">
                                            <section class="panel">
                                                <header class="panel-heading">
                                                    <h2 class="panel-title">Edit Sasaran Organisasi</h2>
                                                </header>
                                                <div class="panel-body">
                                                    <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                                                    <input type="hidden" name="id_manajemen_risiko" value="<?php echo $id_manajemen_risiko;?>">
                                                        <div class="form-group mt-lg">
                                                            <label class="col-sm-3 control-label">Nama Sasaran</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="name" class="form-control" placeholder="Nama Sasaran" required="">
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
<?php 
function custom_footer(){
?>
<script>
    $("#btnTSasaran").click(function(){
        $("#sformTambahan").append('<input type="text" name="sasaran_organisasi[]" class="form-control" placeholder="Nama Sasaran" pattern=".{1,254}">');
    });
</script>
<?php
}?>