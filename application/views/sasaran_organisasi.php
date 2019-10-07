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
                                                        <div id="formTambahan"></div>
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
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Sasaran Organisasi</th>
                                    <th class="text-center">Indikator</th>
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
                                <td><?php echo $value->sasaran_organisasi;?></td>
                                <td><a href="<?php echo base_url();?>index.php/indikator_sasaran/index/<?php echo $value->id_sasaran_organisasi;?>" class="mb-xs mt-xs mr-xs btn btn-circle btn-default"><i class="fa fa-search"></i></a></td>
                                <td>
                                <a href="#editForm-<?php echo $value->id_sasaran_organisasi;?>" class="mb-xs mt-xs mr-xs btn btn-warning modal-with-form"><i class="fa fa-pencil"></i></a>
                                        <div id="editForm-<?php echo $value->id_sasaran_organisasi;?>" class="modal-block modal-block-primary mfp-hide">
                                            <section class="panel">
                                                <header class="panel-heading">
                                                    <h2 class="panel-title">Edit Sasaran Organisasi</h2>
                                                </header>
                                                <form id="demo-form" class="form-horizontal mb-lg" action="<?php echo base_url();?>index.php/sasaran_organisasi/update/<?php echo $value->id_sasaran_organisasi;?>"  method="post" enctype="multipart/form-data">
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
                                        <form action="<?php echo base_url();?>/index.php/sasaran_organisasi/delete/<?php echo $value->id_sasaran_organisasi;?>">
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
        $("#formTambahan").append('<input type="text" name="sasaran_organisasi[]" class="form-control" placeholder="Nama Sasaran" pattern=".{1,254}">');
    })
</script>
<?php
}?>