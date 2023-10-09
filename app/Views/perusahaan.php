<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <h1></h1>
<?php if(session()->get('level')== 1) { ?>
                  <a href="<?= base_url('/home/tambah_pt/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
<?php }else{} ?>
                  <h1></h1>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
<?php if(session()->get('level')== 1) { ?>
                      <th>No</th>
                      <th>Nama Perusahaan</th>
                      <th>Alamat Perusahaan</th>
                      <th>Telp Perusahaan</th>
                      <th>Aksi</th>
<?php }else{} ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    foreach ($ferdi as $gas){
                      ?>
                      <tr>
<?php if(session()->get('level')== 1) { ?>
                        <th><?php echo $no++ ?></th>
                        <td><?php echo $gas->nama_pt?></td>
                        <td><?php echo $gas->alamat_pt?></td>
                        <td><?php echo $gas->telp_pt?></td>
                        <td>
                          <a href="<?= base_url('/home/edit_pt/'.$gas->id_pt)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i> </button></a>
                          <a href="<?= base_url('/home/hapus_pt/'.$gas->id_pt)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> </button></a>
                        </td>
<?php }else{} ?>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>