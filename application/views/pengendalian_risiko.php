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
            <li><span>Manajemen Risiko</span></li>
            <li><span>Sasaran Organisasi</span></li>
            <li><span>Indikator Sasaran</span></li>
            <li><span>Risiko</span></li>
            <li><span>Pengendalian</span></li>
        </ol>

    </div>
</header>

<!-- start: page -->
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <section class="panel">
            <div class="panel-heading">
                <h4>Pengendalian Risiko</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 text-right" style="margin-bottom:12px;">
                    <a class="modal-with-form btn btn-success" href="#addForm"><i class="fa fa-plus"></i></a>
                        <div id="addForm" class="modal-block modal-block-primary mfp-hide">
                            <section class="panel">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Tambah Pengendalian</h2>
                                </header>
                                <form id="demo-form" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/pengendalian_risiko/save" enctype="multipart/form-data">
                                <input type="hidden" name="id_risiko" value="<?php echo $id_risiko;?>">
                                <div class="panel-body">
                                        <div class="form-group mt-lg">
                                            <label class="col-sm-3 control-label">Pengendalian</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <input type="text" name="pengendalian[]" class="form-control" placeholder="Pengendalian" required="" pattern=".{1,}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div id="formTambahan"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"><button class="btn btn-defult btn-sm" type="button" id="btnTDampak"><i class="fa fa-plus"></i></button></div>
                                                </div>
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
                                    <th class="text-center">Pengendalian</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($pengendalian as $key => $value) {
                                # code...
                            ?>
                            <tr>
                                    <td><?php echo $key+1;?></td>
                                    <td><?php echo $value->pengendalian;?></td>
                                    <td class="text-center">
                                        <a  class="modal-with-form mb-xs mt-xs mr-xs btn btn-warning" href="#editForm-<?php echo $value->id_pengendalian;?>"><i class="fa fa-pencil"></i></a>
                                        <form action="<?php echo base_url();?>index.php/pengendalian_risiko/delete/<?php echo $value->id_pengendalian;?>" method="post">
                                        <input type="hidden" name="id_pengendalian" value="<?php echo $value->id_pengendalian;?>">
                                            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                        </form>
                                            <div id="editForm-<?php echo $value->id_pengendalian;?>" class="modal-block modal-block-primary mfp-hide">
                                                <section class="panel">
                                                    <header class="panel-heading">
                                                        <h2 class="panel-title">Edit Pengendalian</h2>
                                                    </header>
                                                    <form id="demo-form-<?php echo $value->id_pengendalian;?>" class="form-horizontal mb-lg" method="post" action="<?php echo base_url();?>index.php/pengendalian_risiko/update/<?php echo $value->id_pengendalian;?>" enctype="multipart/form-data">
                                                    <div class="panel-body">
                                                            <div class="form-group mt-lg">
                                                                <label class="col-sm-3 control-label">Pengendalian</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="pengendalian" class="form-control" placeholder="Pengendalian" required="" value="<?php echo $value->pengendalian;?>">
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
    $("#btnTDampak").click(function(){
        $("#formTambahan").append('<input type="text" name="pengendalian[]" class="form-control" placeholder="Pengendalian" pattern=".{1,}">');
    })
</script>
<?php
}?>