<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_agendasklh')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_agenda ?>">
        
        <!-- <div class="item form-group">
          <label class="control-label col-12" >Jam Masuk<span class="required"></span>
          </label>
          <div class="col-12">
            <input disabled type="text" id="jam_masuk" class="form-control col-12 " data-validate-length-range="6" data-validate-words="2" name="jam_masuk" required="required" placeholder="Jam Masuk" value="<?= $ferdi->jam_masuk?>">
          </div>
        </div> -->
        <div class="item form-group">
          <label class="control-label col-12" >Jam Pulang<span class="required"></span>
          </label>
          <div class="col-12">
            <input disabled type="text" id="jam_pulang" class="form-control col-12 "name="jam_pulang" required="required" placeholder="Jam Pulang" value="<?= $ferdi->jam_pulang?>">
          </div>
        </div>
        <div class="item form-group">
          <label  class="control-label col-12" >Rencana Pekerjaan<span class="required"></span>
          </label>
          <div class="col-12">
            <input disabled type="text" id="rencana_pekerjaan" name="rencana_pekerjaan" placeholder="Rencana Pekerjaan" required="required" class="form-control col-12 " value="<?= $ferdi->rencana_pekerjaan?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Realisasi Pekerjaan<span class="required"></span>
          </label>
          <div class="col-12">
            <input disabled type="text" id="relalisasi_pekerjaan" name="relalisasi_pekerjaan" placeholder="Realisasi Pekerjaan" required="required" class="form-control col-12 " value="<?= $ferdi->relalisasi_pekerjaan?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Penugasan Atasan Dari Atasan<span class="required"></span>
          </label>
          <div class="col-12">
            <input disabled type="text" id="penugasan_atasan" name="penugasan_atasan" placeholder="Penugasan Atasan Dari Atasan" required="required" class="form-control col-12 " value="<?= $ferdi->penugasan_atasan?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Penemuan Masalah<span class="required"></span>
          </label>
          <div class="col-12">
            <input disabled type="text" id="penemuan_masalah" name="penemuan_masalah" placeholder="Penemuan Masalah" required="required" class="form-control col-12 " value="<?= $ferdi->penemuan_masalah?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Persetujuan Dari Pihak Sekolah <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="persetujuan" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="persetujuan" required="required">
              <option value="<?= $ferdi->persetujuan?>"><?= $ferdi->persetujuan; ?></option>
              <!-- <option>Select Gender</option> -->
              <option value="Setuju">Setuju</option>
              <option value="Tidak Setuju">Tidak Setuju</option>
            </select>
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/agendasklh" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>