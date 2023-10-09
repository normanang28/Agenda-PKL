<section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <h1></h1>
<?php if(session()->get('level')== 4) { ?>
                  <a href="<?= base_url('/home/tambah_agenda/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
<?php }else{} ?>
                  <h1></h1>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
<?php if(session()->get('level')== 2 || session()->get('level')== 3 || session()->get('level')== 4) { ?>
                      <th>No</th>
                      <th>Tanggal dan Jam Masuk</th>
                      <th>Jam Pulang</th>
                      <th>Rencana Pekerjaan</th>
                      <th>Realisasi Pekerjaan</th>
                      <th>Penugasan Khusus Dari Atasan</th>
                      <th>Penemuan Masalah</th>
                      <th>Persetujuan Dari Pihak Sekolah</th>
                      <th>Persetujuan Dari Pihak Perusahaan</th>
                      <th>Maker</th>
<?php if(session()->get('level')== 4) { ?>
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
                        <th><?php echo $no++ ?></th>
                        <td><?php echo $gas->tanggal_agenda?></td>
                        <td><?php echo $gas->jam_pulang?></td>
                        <td><?php echo $gas->rencana_pekerjaan?></td>
                        <td><?php echo $gas->relalisasi_pekerjaan?></td>
                        <td><?php echo $gas->penugasan_atasan?></td>
                        <td><?php echo $gas->penemuan_masalah?></td>
                        <td><?php echo $gas->persetujuan?></td>
                        <td><?php echo $gas->persetujuan_pt?></td>
                        <td><?php echo $gas->username?></td>

                        <td>
<?php if(session()->get('level')== 4) { ?>
                          <a href="<?= base_url('/home/edit_agenda/'.$gas->id_agenda)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i> </button></a>
<?php if(session()->get('level')== 3) { ?>
                          <a href="<?= base_url('/home/edit_agendasklh/'.$gas->id_agenda)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i> </button></a>
<?php }else{} ?>
<?php if(session()->get('level')== 2) { ?>
                          <a href="<?= base_url('/home/edit_agendapt/'.$gas->id_agenda)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i> </button></a>
<?php }else{} ?>
                          <a href="<?= base_url('/home/hapus_agenda/'.$gas->id_agenda)?>"><button class="btn btn-danger"><i class="fa fa-trash"></i> </button></a>
<?php }else{} ?>
                        </td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>