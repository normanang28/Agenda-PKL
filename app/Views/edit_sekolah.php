<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_sekolah')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_sekolah ?>">
        
        <div class="item form-group">
          <label class="control-label col-12" >Nama Sekolah<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_sekolah" class="form-control col-12 " data-validate-length-range="6" data-validate-words="2" name="nama_sekolah" required="required" placeholder="Nama Sekolah" value="<?= $ferdi->nama_sekolah?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Alamat Sekolah  <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat_sekolah" class="form-control col-12 "name="alamat_sekolah" required="required" placeholder="Alamat Sekolah" value="<?= $ferdi->alamat_sekolah?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Telp Sekolah <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="telp_sekolah" name="telp_sekolah" placeholder="Telp Sekolah" required="required" class="form-control col-12 " value="<?= $ferdi->telp_sekolah?>">
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/sekolah" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>