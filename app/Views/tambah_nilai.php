<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_nilai')?>" method="post">
                <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12">Nama Sekolah<span class="required"></span>
          </label>
          <div class="col-12">
            <select  name="id_sekolah" class="form-control " id="id_sekolah" required>
              <option>Pilih Nama Sekolah</option>
              <?php 
              foreach ($a as $nama) {
              ?>
              <option value="<?php echo $nama->id_sekolah ?>"><?php echo $nama->nama_sekolah ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Nama Guru Sekolah<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_guru" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_guru" required="required" placeholder="Nama Guru Sekolah">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Nama Siswa<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_siswa" name="nama_siswa" placeholder="Nama siswa" required="required" class="form-control col-12">
          </div>
        </div>
      <div class="item form-group">
          <label class="control-label col-12" >Nilai Siswa <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="nilai" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nilai" required="required">
              <option>Pilih Nilai</option>
              <option value="A (Sangat Baik)">A (Sangat Baik)</option>
              <option value="B (Baik)">B (Baik)</option>
              <option value="C (Cukup)">C (Cukup)</option>
              <option value="D (Kurang)">D (Kurang)</option>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Catatan Untuk Siswa<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="catatan" name="catatan" placeholder="Catatan Untuk Siswa" required="required" class="form-control col-12">
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/nilai_sklh" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>