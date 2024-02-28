<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h2 {
            font-family: roboto, sans-serif;
            font-weight: 600;
            text-align: center;
            color: white;
        }

        p {
            color: white;
            font-family: roboto, sans-serif;
        }

        .top-bar {
            background: #332941;
            padding: 15px;
        }

        .btn {
            background: #332941;
            color: white;
            font-family: roboto, sans-serif;

        }
    </style>
</head>

<body>
    <div class="top-bar">
        <h2>Form Belanja-Tokomedia</h2>
        <p style="text-align:center;">Selamat berbelanja di toko kami :3</p>
    </div>
    <hr>
    <div class="row mx-5">
        <div class="col-12 col-md-8">

            <form action="proses_belanja.php" method="post">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">customer</label>
                    <div class="col-8">
                        <input id="customer" name="customer" placeholder="Nama Customer" type="text"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV">
                            <label for="radio_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="KULKAS">
                            <label for="radio_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_2" type="radio" class="custom-control-input"
                                value="MESIN CUCI">
                            <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_3" type="radio" class="custom-control-input" value="AC">
                            <label for="radio_3" class="custom-control-label">AC</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="Jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">Daftar Harga Barang</li>
            <li class="list-group-item">TV : 4.200.000</li>
            <li class="list-group-item">kulkas : 3.100.00</li>
            <li class="list-group-item">Mesin Cuci : 3.800.00</li>
            <li class="list-group-item">AC : 1.800.00</li>
            <li class="list-group-item active" aria-current="true">Harga dapat berubah setiap saat</li>
        </ul>
    </div>


</body>

</html>