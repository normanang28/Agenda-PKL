<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_perusahaan')?>" method="post">
                <h1></h1>
        
        <div class="item form-group">
          <label class="control-label col-12" >Nama Perusahaan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_pt" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_pt" required="required" placeholder="Nama Perusahaan">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Alamat Perusahaan <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat_pt" name="alamat_pt" placeholder="Alamat Perusahaan" required="required" class="form-control col-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Telp Perusahaan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="telp_pt" name="telp_pt" placeholder="Telp Perusahaan" required="required" class="form-control col-12">
          </div>
        </div>
        
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/perusahaan" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>