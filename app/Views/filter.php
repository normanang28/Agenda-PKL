<div class="col-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>
        <?php if ($kunci=='view_absenpt') {
        }else if ($kunci=='view_nilaipt') {
        }else if ($kunci=='view_absensklh') {
        }else if ($kunci=='view_nilaisklh') {
        }else{
        }
        ?>
      </h2>
      <!--  -->
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <form class="form-horizontal form-label-left" novalidate

      action="
      <?php if ($kunci=='view_absenpt') {
        echo base_url('home/cari_absenpt');
        }else if ($kunci=='view_nilaipt') {
        echo base_url('home/cari_nilaipt');
        }else if ($kunci=='view_absensklh') {
        echo base_url('home/cari_absensklh');
        }else if ($kunci=='view_nilaisklh') {
        echo base_url('home/cari_nilaisklh');
        }else{
          echo base_url('home/cari_agenda');
        }
        ?>" method="post">

        <div class="item form-group">
          <label class="control-label col-12">Tanggal Awal 
          </label>
          <div class="col-12">
            <input id="name" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12">Tanggal Akhir
          </label>
          <div class="col-12">
            <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-12">
          </div>
        </div>
        <div class="form-group">
          <div class="col-12">
            <button id="send" type="submit" class="btn btn-warning"><i class="fa fa-print"></i> Print</button>
          </div>
        </div>
      </form>

      <div class="ln_solid"></div>

      <form class="form-horizontal form-label-left" novalidate

      action="
      <?php if ($kunci=='view_absenpt') {
        echo base_url('home/pdf_absenpt');
        }else if ($kunci=='view_nilaipt') {
        echo base_url('home/pdf_nilaipt');
        }else if ($kunci=='view_absensklh') {
        echo base_url('home/pdf_absensklh');
        }else if ($kunci=='view_nilaisklh') {
        echo base_url('home/pdf_nilaisklh');
        }else{
          echo base_url('home/pdf_agenda');
        }
        ?>" method="post" target="_blank">

        <div class="item form-group">
          <label class="control-label col-12">Tanggal Awal
          </label>
          <div class="col-12">
            <input id="name" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12">Tanggal Akhir
          </label>
          <div class="col-12">
            <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-12">
          </div>
        </div>
        <div class="form-group">
          <div class="col-12">
            <button type="submit" class="btn btn-danger"><i class="fa fa-print"></i> PDF</button>
          </div>
        </div>
      </form>

      <div class="ln_solid"></div>

      <form class="form-horizontal form-label-left" novalidate

      action="
      <?php if ($kunci=='view_absenpt') {
        echo base_url('home/excel_absenpt');
        }else if ($kunci=='view_nilaipt') {
        echo base_url('home/excel_nilaipt');
        }else if ($kunci=='view_absensklh') {
        echo base_url('home/excel_absensklh');
        }else if ($kunci=='view_nilaisklh') {
        echo base_url('home/excel_nilaisklh');
        }else{
          echo base_url('home/excel_agenda');
        }
        ?>" method="post">

        <div class="item form-group">
          <label class="control-label col-12">Tanggal Awal
          </label>
          <div class="col-12">
            <input id="name" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12">Tanggal Akhir
          </label>
          <div class="col-12">
            <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-12">
          </div>
        </div>
        <div class="form-group">
          <div class="col-12">
            <button type="submit" class="btn btn-success"><i class="fa fa-print"></i> Excel</button>
          </div>
        </div>
      </form>
      <div class="ln_solid"></div>
      <form class="form-horizontal form-label-left" novalidate
      action="
      <?php if ($kunci=='view_absenpt') {
        echo base_url('home/laporan_absensipt');
        }else if ($kunci=='view_nilaipt') {
        echo base_url('home/laporan_nilaipt');
        }else if ($kunci=='view_absensklh') {
        echo base_url('home/laporan_absensisklh');
        }else if ($kunci=='view_nilaisklh') {
        echo base_url('home/laporan_nilai');
        }else{
          echo base_url('home/laporan_agenda');
        }
        ?>" method="post">
      </div>
    </div>
  </div>