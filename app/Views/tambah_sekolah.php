<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_sekolah')?>" method="post">
                <h1></h1>
        
        <div class="item form-group">
          <label class="control-label col-12" >Nama Sekolah<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_sekolah" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_sekolah" required="required" placeholder="Nama Sekolah">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Alamat Sekolah <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat_sekolah" name="alamat_sekolah" placeholder="Alamat Sekolah" required="required" class="form-control col-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Telp Sekolah<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="telp_sekolah" name="telp_sekolah" placeholder="Telp Sekolah" required="required" class="form-control col-12">
          </div>
        </div>
        
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/sekolalh" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>