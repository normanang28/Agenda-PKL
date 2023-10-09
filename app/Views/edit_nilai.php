<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Jabatan</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_nilai')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_nilai ?>">
        
        <div class="item form-group">
          <label class="control-label col-12">Nama Sekolah <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="nama_sekolah" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_sekolah" required="required">
              <option value="<?= $ferdi->id_sekolah?>"><?= $ferdi->nama_sekolah?></option>

              <?php foreach ($ok as $gas){ ?>
                <option value="<?= $gas->id_sekolah; ?>"><?= $gas->nama_sekolah; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Nama Guru <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_guru" name="nama_guru" placeholder="Nama Guru" required="required" class="form-control col-12 " value="<?= $ferdi->nama_guru?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Nama Siswa <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" required="required" class="form-control col-12 " value="<?= $ferdi->nama_siswa?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Nilai Siswa <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="nilai" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nilai" required="required">
              <option value="<?= $ferdi->nilai?>"><?= $ferdi->nilai; ?></option>
              <!-- <option>Select Gender</option> -->
              <option value="A (Sangat Baik)">A (Sangat Baik)</option>
              <option value="B (Baik)">B (Baik)</option>
              <option value="C (Cukup)">C (Cukup)</option>
              <option value="D (Kurang)">D (Kurang)</option>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Catatan Untuk Siswa <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="catatan" name="catatan" placeholder="Catatan Untuk Siswa" required="required" class="form-control col-12 " value="<?= $ferdi->catatan?>">
          </div>
        </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/nilai_sklh" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>