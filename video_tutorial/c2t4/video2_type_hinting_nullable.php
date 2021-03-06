<!-- CASE -->
<!-- menghitung harga jual tanah berdasarkan bentuk lahan -->
<!-- pemerintah provinsi X menganggarkan sebagian apbd nya untuk melakukan pembelian aset berupa tanah/lahan -->
<!-- yang dalam rencananya akan digunakan untuk membangun sebuah stadion sepakbola kebanggaan provinsi X tersebut -->
<!-- terdapat sebuah areal lahan potensial berbentuk persegi yang siap untuk dibangun stadion ditengahnya yang akan berbentuk lingkaran -->
<!-- namun pemerintah X perlu melakukan pengkajian untuk menghitung anggaran yang harus dikeluarkan diluar luas lahan yang akan dibangun stadion diatasnya tersebut -->
<!-- sedangkan harga yang disetujui untuk per m2 adalah senilai Rp. 450.000 -->
<!-- berapakah anggaran yang harus dikeluarkan pemerintah X untuk lahan diluar luas stadion? -->
<!-- GANTI CASE, BUAT SEDERHANA KARENA AKAN DIGUNAKAN VIDEO TUTORIAL SAJA -->

<?php

function squareArea(float $side): float
{
    return $side * $side;
}

function circleArea(float $r): float
{
    return pi() * $r * $r;;
}

function pricesOfLand(float $areaOfLand, int $pricePerMSquare)
{
    return $areaOfLand * $pricePerMSquare;;
}

$sideSquareLength = 220.0;
$radOfCircle = 80.0;
$pricePerM2Area = 450000;

$squareArea = squareArea($sideSquareLength);
$circleArea = circleArea($radOfCircle);

$outerStadionArea       = $squareArea - $circleArea;
$pricesLandTotal        = pricesOfLand($squareArea, $pricePerM2Area);
$pricesLandOuterStadion = pricesOfLand($outerStadionArea, $pricePerM2Area);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stadion Land Prices Estimation</title>
</head>

<body>
    <h1>Stadion Land Prices Estimation</h1>
    <p><?php echo "Dengan sisi lahan yang berbentuk persegi memiliki panjang $sideSquareLength m." ?></p>
    <p><?php echo "Dan radius/jari-jari untuk digunakan sebagai stadion direncanakan sepanjang $radOfCircle m." ?></p>
    <p><?php echo "Maka total luas lahan keseluruan yaitu " . number_format($squareArea, 2) . " m<sup>2</sup> seharga " . number_format($pricesLandTotal, 2) . ", sedangkan yang akan dimanfaatkan sebagai stadion hanya seluas " . number_format($circleArea, 2) . " m<sup>2</sup>." ?></p>
    <p><?php echo "Akan tersisa lahan seluas " . number_format($outerStadionArea, 2) . " m<sup>2</sup> yang dapat dimanfaatkan sebagai fasilitas penunjang, namun pemerintah X harus membayar Rp. " . number_format($pricesLandOuterStadion, 2) . " diluar harga lahan untuk stadion." ?></p>
</body>

</html>