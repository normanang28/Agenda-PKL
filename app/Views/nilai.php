<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <h1></h1>
<?php if(session()->get('level')== 3) { ?>
                  <a href="<?= base_url('/home/tambah_nilai/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
<?php }else{} ?>
                  <h1></h1>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
<?php if(session()->get('level')== 1 || session()->get('level')== 3) { ?>
                      <th>No</th>
                      <th>Nama Sekolah</th>
                      <th>Nama Guru</th>
                      <th>Nama Siswa</th> 
                      <th>Nilai Siswa</th>
                      <th>Catatan Untuk Siswa</th>
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
<?php if(session()->get('level')== 1 || session()->get('level')== 3) { ?>
                        <th><?php echo $no++ ?></th>
                        <td><?php echo $gas->nama_sekolah?></td>
                        <td><?php echo $gas->nama_guru?></td>
                        <td><?php echo $gas->nama_siswa?></td>
                        <td><?php echo $gas->nilai?></td>
                        <td><?php echo $gas->catatan?></td>
                        <td>
<?php if(session()->get('level')== 3 ) { ?>
                          <a href="<?= base_url('/home/edit_nilai/'.$gas->id_nilai)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i> </button></a>
<?php }else{} ?>
<?php if(session()->get('level')== 1 ) { ?>
                          <a href="<?= base_url('/home/hapus_nilai/'.$gas->id_nilai)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> </button></a>
<?php }else{} ?>
                        </td>
<?php }else{} ?>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>