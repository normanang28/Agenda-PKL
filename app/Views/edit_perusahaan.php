<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_pt')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_pt ?>">
        
        <div class="item form-group">
          <label class="control-label col-12" >Nama Perusahaan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama_pt" class="form-control col-12 " data-validate-length-range="6" data-validate-words="2" name="nama_pt" required="required" placeholder="Nama Perusahaan" value="<?= $ferdi->nama_pt?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Alamat Perusahaan  <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat_pt" class="form-control col-12 "name="alamat_pt" required="required" placeholder="Alamat Perusahaan" value="<?= $ferdi->alamat_pt?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Telp Perusahaan <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="telp_pt" name="telp_pt" placeholder="Telp Perusahaan" required="required" class="form-control col-12 " value="<?= $ferdi->telp_pt?>">
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/perusahaan" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>