<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Karyawan</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_pengguna')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_user ?>">

        <div class="item form-group">
          <label class="control-label col-12" >Nama<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama" required="required" placeholder="Nama" value="<?= $ferdi->nama?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Jenis Kelamin <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="jk" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="jk" required="required">
              <option value="<?= $ferdi->jk?>"><?= $ferdi->jk; ?></option>
              <!-- <option>Select Gender</option> -->
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >E-Mail <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="email" name="email" placeholder="E-Mail" required="required" class="form-control col-12" value="<?= $ferdi->email?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >No Telpon<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="telp" name="telp" placeholder="No Telpon" required="required" class="form-control col-12" value="<?= $ferdi->telp?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Alamat <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat" name="alamat" placeholder="Alamat" required="required" class="form-control col-12" value="<?= $ferdi->alamat?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Username<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="username" name="username" placeholder="Username" required="required" class="form-control col-12" value="<?= $ferdi->username?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Level <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="level" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="level" required="required">
              <option value="<?= $ferdi->level?>"><?= $ferdi->level; ?></option>
              <option value="1">Admin</option>
              <option value="2">Pembimbing</option>
              <option value="3">Guru</option>
              <option value="4">Siswa</option>
            </select>
          </div>
        </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/pengguna_detail" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>