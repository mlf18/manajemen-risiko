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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <?=$aksi?> Benturan Kepentingan
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $url;?>" method="post">
                            <div class="form-group row">
                                <div class="col-3">Tahun</div>
                                <div class="col-9">
                                    <select name="tahun" class="form-control" required>
                                        <?php
                                        $tahun =date('Y');
                                            for($i=2017;$i<=$tahun;$i++){
                                                if($bk){
                                                    if($bk->tahun == $i){
                                                        echo '<option value='.$i.' selected>'.$i.'</option>';
                                                    }else{
                                                        echo '<option value='.$i.'>'.$i.'</option>';
                                                    }
                                                }
                                                echo '<option value='.$i.'>'.$i.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-3">
                                    Uraian
                                </div>
                                <div class="col-9">
                                    <textarea name="uraian" id="" rows="3" class="form-control" required><?=$bk?$bk->uraian:''?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-3">
                                    Pelaku yang Terkait
                                </div>
                                <div class="col-9">
                                    <input type="text" name="pelaku" id="" class="form-control" value="<?=$bk?$bk->pelaku:''?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-3">
                                    Penyebab
                                </div>
                                <div class="col-9">
                                    <input type="text" name="penyebab" id="" class="form-control" value="<?=$bk?$bk->penyebab:''?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-3">
                                    Rencana Aksi
                                </div>
                                <div class="col-9">
                                    <textarea name="rencana_aksi" id="" rows="3" class="form-control" required><?=$bk?$bk->rencana_aksi:''?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-3">
                                    Tindak Lanjut
                                </div>
                                <div class="col-9">
                                    <textarea name="tindak_lanjut" id="" rows="3" class="form-control" required><?=$bk?$bk->tindak_lanjut:''?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>