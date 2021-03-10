<?php

$bilanganpertama = "";           
$bilangankedua = "";      
$hasil = "";          
$deret = "";           
$jumlahderet = "";         

if (isset($_POST['submit'])) { 

    $bilanganpertama = $_POST["angkapertama"];
    $bilangankedua = $_POST["angkakedua"];
    $jumlahderet = $_POST["jumlahderet"];

    $a = $bilanganpertama;
    $b = $bilangankedua;
    $n = $jumlahderet;

    $deret = $a . ", " . $b;
    for ($i = 0; $i < $n - 2; $i++) {

        $hasil = $a + $b;

        $a = $b;
        $b = $hasil;
        $deret = $deret . ", " . $hasil;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fibonacci Putu Yuliawati</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form method="POST" action="#" class="bg-white form-container p-3" id="forminput">
                    <h2><b>Deret Fibonacci Yuliawati</b></h2>
                    <div class="form-group" style="background-color:yellow">
                        <label for="angkapertama">Masukkan Angka pertama</label>
                        <input type="text" class="form-control" value="<?php echo $angkapertama; ?>" id="angkapertama"
                        placeholder="Masukkan Angka Pertama" name="angkapertama" required />
                    </div>
                    <div class="form-group" style="background-color:yellow">
                        <label for="angkakedua">Masukkan Angka kedua</label>
                        <input type="text" class="form-control" value="<?php echo $angkakedua; ?>" id="angkakedua"
                        placeholder="Masukkan Angka Kedua" name="angkakedua" required />
                    </div>
                    <div class="form-group" style="background-color:yellow">
                        <label for="jumlahderet">Jumlah deret</label>
                        <input type="text" class="form-control" value="<?php echo $jumlahderet; ?>" id="jumlahderet"
                        placeholder="Masukkan Jumlah Deret" name="jumlahderet" required />
                    </div>
                    <br><button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit">Hitung</button></br>
                    <div class="form-group">
                        <h4 style="text-align: center;"><b>Hasil</b></h4>
                        <h4 style="background-color:pink; color: white;; text-align: center; border-radius: 4px;"><?php echo $deret; ?></h4>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>