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
            <li><a href="<?php echo base_url();?>index.php/sasaran_organisasi/index/<?php echo $sasaran[0]->id_manajemen_risiko;?>"><span>Sasaran Organisasi</span></a></li>
            <li><a href="#"><span>Kegiatan</span></a></li>
        </ol>

    </div>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-heading">
                <h4>Kegiatan Sasaran <?php echo $sasaran[0]->sasaran_organisasi;?></h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 text-right" style="margin-bottom:12px;">
                        <a class="modal-with-form btn btn-success" href="#addForm"><i class="fa fa-plus"></i></a>
                        <div id="addForm" class="modal-block modal-block-primary mfp-hide">
                            <section class="panel">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Tambah Kegiatan</h2>
                                </header>
                                
                                <div class="panel-body">
                                <form id="demo-form" class="form-horizontal mb-lg" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/indikator_sasaran/save">
                                        <input type="hidden" name="id_sasaran_organisasi" value="<?php echo $id_sasaran_organisasi;?>">
                                        <div class="form-group mt-lg">
                                            <label class="col-sm-3 control-label">Kegiatan</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <input type="text" name="indikator_organisasi[]" class="form-control" placeholder="Indikator" required="" pattern=.{1,254}>
                                                        <div id="formTambahan"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><button class="btn btn-defult btn-sm" type="button" id="btnTIndikator"><i class="fa fa-plus"></i></button></div>
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
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kegiatan</th>
                                    <th class="text-center">Risiko</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($indikator as $key => $value) {
                                # code...
                            ?>
                                <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $value->indikator_organisasi;?></td>
                                    <td class="text-center"><a href="<?php echo base_url();?>index.php/risiko_organisasi/index/<?php echo $value->id_indikator_organisasi;?>" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                    <td class="text-center">
                                        <a href="#editForm-<?php echo $value->id_indikator_organisasi;?>" class="modal-with-form mb-xs mt-xs mr-xs btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        <form action="<?php echo base_url();?>/index.php/indikator_sasaran/delete/<?php echo $value->id_indikator_organisasi;?>">
                                            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                        </form>
                                        <div id="editForm-<?php echo $value->id_indikator_organisasi;?>" class="modal-block modal-block-primary mfp-hide">
                                            <section class="panel">
                                                <header class="panel-heading">
                                                    <h2 class="panel-title">Edit Kegiatan</h2>
                                                </header>
                                                <form id="demo-form-<?php echo $value->id_sasaran_organisasi;?>" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/indikator_sasaran/update/<?php echo $value->id_indikator_organisasi;?>">
                                                <div class="panel-body">
                                                        <div class="form-group mt-lg">
                                                            <label class="col-sm-3 control-label">Kegiatan</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="indikator_organisasi" class="form-control" placeholder="Indikator" required="" value="<?php echo $value->indikator_organisasi;?>" pattern=".{1,254}">
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
                                    <td>Persentase unit kerja yang menindaklanjuti rekomendasi BPK</td>
                                    <td class="text-center"><a href="<?php echo base_url();?>index.php/manajemen_risiko/risiko_organisasi" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                    <td class="text-center">
                                        <a href="#editForm" class="modal-with-form mb-xs mt-xs mr-xs btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                        <div id="editForm" class="modal-block modal-block-primary mfp-hide">
                                            <section class="panel">
                                                <header class="panel-heading">
                                                    <h2 class="panel-title">Edit Indikator</h2>
                                                </header>
                                                <div class="panel-body">
                                                    <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                                                        <div class="form-group mt-lg">
                                                            <label class="col-sm-3 control-label">Indikator</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="name" class="form-control" placeholder="Indikator" required="">
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
<?php 
function custom_footer(){
?>
<script>
    $("#btnTIndikator").click(function(){
        $("#formTambahan").append('<input type="text" name="indikator_organisasi[]" class="form-control" placeholder="Kegiatan" pattern=".{1,254}">');
    })
</script>
<?php
}?>