<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <h1></h1>
<?php if(session()->get('level')== 4) { ?>
                  <a href="<?= base_url('/home/tambah_absenpt/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
<?php }else{} ?>
                  <h1></h1>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
<?php if(session()->get('level')== 2 || session()->get('level')== 4) { ?>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Nama Perusahaan</th>
                      <th>Absen</th>
                      <th>Tanggal</th>
<?php if(session()->get('level')== 2) { ?>
                      <th>Aksi</th>
<?php }else{} ?>
<?php }else{} ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    foreach ($ferdi as $gas){
                      ?>
                      <tr>
<?php if(session()->get('level')== 2 || session()->get('level')== 4) { ?>
                        <th><?php echo $no++ ?></th>
                        <td><?php echo $gas->nama?></td>
                        <td><?php echo $gas->nama_pt?></td>
                        <td><?php echo $gas->absenpt?></td>
                        <td><?php echo $gas->tanggal_absenpt?></td>
<?php if(session()->get('level')== 2) { ?>
                        <td>
                          <a href="<?= base_url('/home/hapus_absenpt/'.$gas->id_absenpt)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> </button></a>
                        </td>
<?php }else{} ?>
<?php }else{} ?>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>