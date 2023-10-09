<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_absen')?>" method="post">
                <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12">Nama <span class="required"></span>
          </label>
          <div class="col-12">
            <select  name="id_pengguna" class="form-control " id="id_pengguna" required>
              <option>Pilih Nama</option>
              <?php 
              foreach ($a as $nama) {
              ?>
              <option value="<?php echo $nama->id_pengguna ?>"><?php echo $nama->nama ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12">Nama Sekolah<span class="required"></span>
          </label>
          <div class="col-12">
            <select  name="id_sekolah" class="form-control " id="id_sekolah" required>
              <option>Pilih Nama Sekolah</option>
              <?php 
              foreach ($ok as $sekolah) {
              ?>
              <option value="<?php echo $sekolah->id_sekolah ?>"><?php echo $sekolah->nama_sekolah ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Absen <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="absen" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="absen" required="required">
              <option>Pilih </option>
              <option value="Hadir">Hadir</option>
              <option value="Sakit">Sakit</option>
              <option value="Izin">Izin</option>
              <option value="Tanpa Keterangan">Tanpa Keterangan</option>
            </select>
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/absensklh" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>