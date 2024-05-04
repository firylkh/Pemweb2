<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');


$query = "SELECT * FROM paramedik";
$paramediks = $dbh->query($query);
?>
<main>
<style> 
    h3{ 
        font-family: poppins, sans-serif; 
        font-weight: 600; 
        text-align: center; 
    } 
</style> 
 
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
    <h3 class="mt-5">Tenaga Medis</h3> 
        <div class= "d-flex mt-4"> 
        <a href="dashboard.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> <strong>Kembali</strong></a> 
        
        <a href="paramedik_create.php" class="btn btn-primary ms-auto"><strong>+Tambah</strong></a> 
         
        </div>

    <table class="table mt-4">
      <tr>
        <th>No</th>
        <th>Nama Dokter</th>
        <th>JK</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Kategori</th>
        <th>No Tlp</th>
        <th>Alamat Tinggal</th>
        <th>Unit Kerja ID</th>

      </tr>

      <?php
      $no = 0;
      foreach ($paramediks as $paramedik) :
      ?>
        <tr>
          <td><?= $no += 1; ?></td>
          <td><?= $paramedik ['nama'] ?></td>
          <td><?= $paramedik ['gender'] ?></td>
          <td><?= $paramedik ['tgl_lahir'] ?></td>
          <td><?= $paramedik ['tmp_lahir'] ?></td>
          <td><?= $paramedik ['kategori'] ?></td>
          <td><?= $paramedik ['telpon'] ?></td>
          <td><?= $paramedik ['alamat'] ?></td>
          <td><?= $paramedik ['unit_kerja_id'] ?></td>

          <td>
            <a href="paramedik_edit.php?id=<?= $paramedik['id'] ?>" class="btn btn-primary">
              <i class="fas fa-edit"></i>
            </a>
            <a href="paramedik_delete.php?id=<?= $paramedik['id'] ?>" class="btn btn-danger">
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