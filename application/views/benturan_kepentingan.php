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
                        <div class="offset-11 py-1">
                            <a href="<?php echo base_url();?>/index.php/benturan_kepentingan/tambah" class="btn btn-sm btn-success"><i class="nav-icon fas fa-plus"></i>Tambah</a>
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
                            foreach ($bks as $key => $value) {
                                # code...
                            ?>
                                <tr>
                                    <td><?=$key+1?></td>
                                    <td><?=$value->tahun?></td>
                                    <td><?=$value->nama_unit?></td>
                                    <td><?=$value->uraian?></td>
                                    <td><?=$value->pelaku?></td>
                                    <td><?=$value->penyebab?></td>
                                    <td><?=$value->rencana_aksi?></td>
                                    <td><?=$value->tindak_lanjut?></td>
                                    <td>
                                        <a href="<?php echo base_url();?>/index.php/benturan_kepentingan/edit/<?=$value->id_benturan_kepentingan;?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i> Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i> Delete</a>
                                    </td>
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