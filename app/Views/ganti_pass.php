<div class="col-12">
  <div class="x_panel">
    <div class="x_title">
      <!-- <h2>Ganti Password</h2> -->
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_ganti_password')?>" method="post">

        <div class="item form-group">
          <label class="control-label col-12">Ganti Password
          </label>
          <div class="col-12">
            <input id="pswd" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="pswd" placeholder="Ganti Password"  required="required" type="text">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>