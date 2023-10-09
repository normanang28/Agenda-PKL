<div align="center">

<!-- <img align="center" src="data:image/jpg;base64,<?= $foto?>" width="82%" height="18%" >
 --><div>
  <br>
  <br>
</div>

 <table id="datatable-buttons" align="center" border="1" align="center" width="100%" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Nama Perusahaan</th>
      <th>Absen</th>
      <th>Tanggal</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $no=1;
    foreach ($ferdi as $gas){
      ?>
      <tr>
      <th><?php echo $no++ ?></th>
      <td><?php echo $gas->nama?></td>
      <td><?php echo $gas->nama_pt?></td>
      <td><?php echo $gas->absenpt?></td>
      <td><?php echo $gas->tanggal_absenpt?></td>
      </tr>
    <?php }?>
  </tbody>
</table>
</div>
<script>
  window.print();
</script>