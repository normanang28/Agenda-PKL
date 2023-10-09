<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <h1></h1>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
<?php if(session()->get('level')== 1) { ?>
                      <th>Nama </th>
                      <th>Jenis Kelamin</th>
                      <th>E-Mail</th>
                      <th>Alamat</th>
                      <th>No Telpon</th>
                      <th>Username</th>
                      <!-- <th>Level</th> -->
                      <th>Aksi</th>
<?php }else{} ?>
                    </tr>
                  </thead>
                  <tbody>
                    
                      <tr>
<?php if(session()->get('level')== 1) { ?>
                        <td><?php echo $gas->nama?></td>
                        <td><?php echo $gas->jk?></td>
                        <td><?php echo $gas->email?></td>
                        <td><?php echo $gas->alamat?></td>
                        <td><?php echo $gas->telp?></td>
                        <td><?php echo $gas->username?></td>
                        <!-- <td><?php echo $gas->level?></td> -->
                        <td>
                          <a href="<?= base_url('/home/reset_pengguna/'.$gas->id_user)?>"><button class="btn btn-info"><i class="fa fa-edit"></i> Reset Password</button></a>
                          <a href="<?= base_url('/home/edit_pengguna/'.$gas->id_user)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i> </button></a>
                          <a href="<?= base_url('/home/hapus_pengguna/'.$gas->id_user)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> </button></a>
                          <a href="/home/pengguna_detail" type="submit" class="btn btn-primary"><i class="fa fa-undo"></i></a></button>
                        </td>
<?php }else{} ?>
                      </tr>
                  </tbody>
                </table>
              </div>
              </div>
            </div>