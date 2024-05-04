<?php
    include_once('top.php');
    include_once('menu.php');
    include_once('koneksi.php');


    $query = "SELECT * FROM unitkerja";
    $unitkerjas= $dbh->query($query);
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
    <div class="container-fluid px-4"> 
    <h3 class="mt-5">Jadwal Kerja PuskesmasKu</h3> 
        <div class= "d-flex mt-4"> 
        <a href="dashboard.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Kembali</a> 
        
        <a href="unitkerja_create.php" class="btn btn-primary ms-auto"><strong>+Tambah</strong></a> 
         
        </div>

          <table class="table mt-4">
            <tr>
              <th>No</th>
              <th>Ruangan</th>
              <th>Medis</th>
              <th>Jam Operasional</th>
            </tr>

            <?php
            $no = 0;
             foreach ($unitkerjas as $unitkerja):
             ?>
              <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $unitkerja ['ruangan'] ?></td>
                <td><?= $unitkerja ['tenaga_medis'] ?></td>
                <td><?= $unitkerja ['jam_operasional'] ?></td>
                <td>
                <a href="unitkerja_edit.php?id=<?= $unitkerja['id_kerja'] ?>" class="btn btn-primary">
              <i class="fas fa-edit"></i>
            </a>
            <a href="unitkerja_delete.php?id=<?= $unitkerja['id_kerja'] ?>" class="btn btn-danger">
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