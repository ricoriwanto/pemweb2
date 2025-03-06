<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Belanja Online</h5>
                <ul class="list-group custom-list">
                    <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
                </ul>
                <style>
                    .custom-list {
                        width: 325px;
                        top: 25px;
                        right: 50px;
                        position: fixed;
                    }
                </style>
                <form method="post">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text1" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-1">
                            <input id="text1" name="jumlah" placeholder="jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
                <?php
if (isset($_POST['submit'])) {
    // Mengambil data dari form
    $nama = $_POST['customer']; // Perbaikan nama input
    $produk = $_POST['produk']; // Perbaikan nama input
    $jumlah = $_POST['jumlah']; // Perbaikan nama input

    // Daftar harga produk
    $hargaProduk = 0;
    $produkList = [
        'tv' => 4200000,
        'kulkas' => 3100000,
        'mesincuci' => 3800000
    ];

    // Menentukan harga produk berdasarkan pilihan
    if (array_key_exists($produk, $produkList)) {
        $hargaProduk = $produkList[$produk];
    }

    // Menghitung total belanja
    $totalBelanja = $hargaProduk * $jumlah;

    // Menampilkan hasil
    echo "<p>Nama Customer: $nama</p>";
    echo "<p>Produk Pilihan: " . ucfirst($produk) . "</p>";
    echo "<p>Jumlah Beli: $jumlah</p>";
    echo "<p>Total Belanja: Rp " . number_format($totalBelanja, 0, ',', '.') . "</p>";
}
?>

            
</body>
</html>