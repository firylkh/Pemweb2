<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');


$query = "SELECT * FROM periksa";
$periksas = $dbh->query($query);
?>



<main>
<style> 
    h3{ 
        font-family: poppins, sans-serif; 
        font-weight: 600; 
        text-align: center; 
        font-size: 35px;
    } 

</style> 
 
<main> 
    <div class="container-fluid px-4"> 
    <h3 class="mt-5">Data Periksa</h3> 
        <div class= "d-flex mt-4"> 
        <a href="dashboard.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> <strong>Kembali</strong></a> 
        
        <a href="periksa_create.php" class="btn btn-primary ms-auto"><strong>+Tambahkan Data</strong></a> 
         
        </div>

    <table class="table mt-4">
      <tr>
        <th>No</th>
        <th>Tanggal Periksa</th>
        <th>Berat Badan</th>
        <th>Tinggi Badan</th>
        <th>Tensi</th>
        <th>Keterangan</th>
      </tr>

      <?php
      $no = 0;
      foreach ($periksas as $periksa) :
      ?>
        <tr>
          <td><?= $no += 1; ?></td>
          <td><?= $periksa['tgl_periksa'] ?></td>
          <td><?= $periksa['berat_badan'] ?></td>
          <td><?= $periksa['tinggi_badan'] ?></td>
          <td><?= $periksa['tensi_pasien'] ?></td>
          <td><?= $periksa['ket_pasien'] ?></td>

          <td>
            <a href="periksa_edit.php?id=<?= $periksa['id_periksa'] ?>" class="btn btn-primary">
              <i class="fas fa-edit"></i>
            </a>
            <a href="periksa_delete.php?id=<?= $periksa['id_periksa'] ?>" class="btn btn-danger">
              <i class="fas fa-trash"></i>
            </a>
          
          </td>
        </tr>

      <?php endforeach; ?>
    </table>
  </div>
</main>


<?php
include_once('buttom.php')

?>