<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_agenda')?>" method="post">
                <h1></h1>
        <!-- <div class="item form-group">
          <label class="control-label col-12" >Jam Masuk<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="jam_masuk" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="jam_masuk" required="required" placeholder="Jam Masuk">
          </div>
        </div> -->
        <div class="item form-group">
          <label class="control-label col-12" >Jam Pulang<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="jam_pulang" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="jam_pulang" required="required" placeholder="Jam Pulang">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Rencana Pekerjaan<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="rencana_pekerjaan" name="rencana_pekerjaan" placeholder="Rencana Pekerjaan" required="required" class="form-control col-12">
          </div>
        </div>
      <div class="item form-group">
          <label class="control-label col-12" >Realisasi Pekerjaan <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="relalisasi_pekerjaan" name="relalisasi_pekerjaan" placeholder="Realisasi Pekerjaan" required="required" class="form-control col-12">
          </div>
        </div>  
        <div class="item form-group">
          <label class="control-label col-12" >Penugasan Khusus Dari Atasan <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="penugasan_atasan" name="penugasan_atasan" placeholder="Penugasan Khusus Dari Atasan" required="required" class="form-control col-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Penemuan Masalah<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="penemuan_masalah" name="penemuan_masalah" placeholder="Penemuan Masalah" required="required" class="form-control col-12">
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/agenda" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>