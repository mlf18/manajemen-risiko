<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-8">
        <h1 class="m-0 text-dark">Benturan Kepentingan </h1>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Benturan Kepentingan</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="offset-10 py-1">
                            <a href="<?php echo base_url();?>benturan_kepentingan/tambah" class="btn btn-sm btn-success"><i class="nav-icon fas fa-plus"></i>Tambah</a>
							<a href="<?php echo base_url();?>benturan_kepentingan/download" class="btn btn-sm btn-primary"><i class="nav-icon fas fa-download"></i>Download</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Unit Kerja</th>
                                <th>Uraian</th>
                                <th>Pelaku yang Terkait</th>
                                <th>Penyebab</th>
                                <th>Rencana Aksi</th>
                                <th>Tindak Lanjut</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                            <?php
							$i=1;
                            foreach ($bks as $key => $value) {
                              if ($value->id_unit == $this->session->userdata('ses_id_unit') or $this->session->userdata('ses_id_unit') == 8) {?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$value->tahun?></td>
                                    <td><?=$value->nama_unit?></td>
                                    <td><?=$value->uraian?></td>
                                    <td><?=$value->pelaku?></td>
                                    <td><?=$value->penyebab?></td>
                                    <td><?=$value->rencana_aksi?></td>
                                    <td><?=$value->tindak_lanjut?></td>
                                    <td>
                                        <a href="<?php echo base_url();?>benturan_kepentingan/edit/<?=$value->id_benturan_kepentingan;?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i> Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus-<?php echo $value->id_benturan_kepentingan?>"><i class="nav-icon fas fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <!-- modal Hapus -->
                                <div class="modal fade" id="modal-hapus-<?php echo $value->id_benturan_kepentingan;?>">
                                  <form id="demo-form" class="form-horizontal mb-lg" action="<?php echo base_url().'benturan_kepentingan/delete/'.$value->id_benturan_kepentingan ?>"  method="post" enctype="multipart/form-data">
                                    <div class="modal-dialog">
                                      <div class="modal-content bg-info">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Apakah anda yakin akan menghapus data berikut :</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body" >
                                                <div class="row">
                                                    <div class="col-md-1">
                                                    </div>
                                                    <div class="col-md-4">
                                                      <label>uraian :</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                      :
                                                    </div>
                                                    <div class="col-md-5">
                                                        <?php echo $value->uraian?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                    </div>
                                                    <div class="col-md-4">
                                                      <label>Tahun</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                      :
                                                    </div>
                                                    <div class="col-md-5">
                                                        <?php echo $value->tahun?>
                                                    </div>

                                                </div>


                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-outline-light">Hapus</button>
                                        </div>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </form>
                                </div>
                                <!-- /.modal hapus -->
                            <?php
							$i++;
                              }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
function custom_footer(){
    ?>
    <script>
        $(function () {
            $('.table').DataTable();
        })
    </script>
    <?php
}
