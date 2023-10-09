<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_absenpt')?>" method="post">
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
          <label class="control-label col-12">Nama Perusahaan<span class="required"></span>
          </label>
          <div class="col-12">
            <select  name="id_pt" class="form-control " id="id_pt" required>
              <option>Pilih Nama Perusahaan</option>
              <?php 
              foreach ($ok as $pt) {
              ?>
              <option value="<?php echo $pt->id_pt ?>"><?php echo $pt->nama_pt ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Absen <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="absenpt" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="absenpt" required="required">
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
            <a href="/home/absenpt" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>