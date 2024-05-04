<?php
include_once('koneksi.php');
$unitkerja = $dbh->query('SELECT * FROM unitkerja');

include_once('top.php');
include_once('menu.php');
?>

<head>

  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="Template/css/styles.css" rel="stylesheet" />

</head>
<style>
  h1 {
    font-family: poppins, sans-serif;
    font-weight: 500;
    text-decoration: underline;
  }
</style>

<body>
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Tambahkan Unit</h1>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <form action="unitkerja_store.php" method="post">
        <div class="form-group row">
          <label for="no" class="col-4 col-form-label">No</label>
          <div class="form-group row">
            <label for="ruangan" class="col-4 col-form-label">Ruangan</label>
            <div class="col-8">
              <input id="ruangan" name="ruangan" type="text" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="tenaga_medis" class="col-4 col-form-label">Tenaga Medis</label>
            <div class="col-8">
              <input id="tenaga_medis" name="tenaga_medis" type="text" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="jam_operasional" class="col-4 col-form-label">Jam Operasional</label>
            <div class="col-8">
              <input id="jam_operasional" name="jam_operasional" type="text" class="form-control" required="required">
            </div>
          </div>

          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
      </form>

    </div>
  </main>
</body>


<?php
include_once('buttom.php');
?>