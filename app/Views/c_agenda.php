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
      <th>Tanggal dan Jam Masuk</th>
      <th>Jam Pulang</th>
      <th>Rencana Pekerjaan</th>
      <th>Realisasi Pekerjaan</th>
      <th>Penugasan Khusus Dari Atasan</th>
      <th>Penemuan Masalah</th>
      <th>Maker</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $no=1;
    foreach ($ferdi as $gas){
      ?>
      <tr>
      <th><?php echo $no++ ?></th>
      <td><?php echo $gas->tanggal_agenda?></td>
      <td><?php echo $gas->jam_pulang?></td>
      <td><?php echo $gas->rencana_pekerjaan?></td>
      <td><?php echo $gas->relalisasi_pekerjaan?></td>
      <td><?php echo $gas->penugasan_atasan?></td>
      <td><?php echo $gas->penemuan_masalah?></td>
      <td><?php echo $gas->username?></td>
      </tr>
    <?php }?>
  </tbody>
</table>
</div>
<script>
  window.print();
</script>