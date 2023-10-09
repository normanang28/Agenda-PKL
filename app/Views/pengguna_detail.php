<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <h1></h1>
<?php if(session()->get('level')== 1) { ?>
                  <a href="<?= base_url('/home/tambah_pengguna/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
<?php }else{} ?>
                  <h1></h1>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
<?php if(session()->get('level')== 1) { ?>
                      <th>No</th>
                      <th>Nama </th>
                      <th>Jenis Kelamin</th>
                      <th>No Telpon</th>
                      <th>Username</th>
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
                        <td><?php echo $gas->nama?></td>
                        <td><?php echo $gas->jk?></td>
                        <td><?php echo $gas->telp?></td>
                        <td><?php echo $gas->username?></td>
                        <td>
                          <a href="<?= base_url('/home/pengguna/'.$gas->id_user)?>"><button class="btn btn-info"><i class="fa fa-bars"></i> Detail</button></a>
                        </td>
<?php }else{} ?>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>