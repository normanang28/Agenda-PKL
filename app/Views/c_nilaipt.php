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
      <th>Nama Perusahaan</th>
      <th>Nama Pembimbing PT</th>
      <th>Nama Siswa</th>
      <th>Nilai Siswa</th>
      <th>Catatan Untuk Siswa</th>
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
      <td><?php echo $gas->nama_pt?></td>
      <td><?php echo $gas->nama_pembimbing?></td>
      <td><?php echo $gas->nama_siswa?></td>
      <td><?php echo $gas->nilaipt?></td>
      <td><?php echo $gas->catatanpt?></td>
      <td><?php echo $gas->tanggal_nilaipt?></td>
      </tr>
    <?php }?>
  </tbody>
</table>
</div>
<script>
  window.print();
</script>