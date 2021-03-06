<!-- CASE -->
<!-- buat 4 buah indexed-array, array pertama yang merepresentasikan/mewakili nama student, array kedua mewakili nilai mapel math, array ketiga mewakili nilai science, array terakhir mewakili nilai english -->
<!-- periksa status apakah elmen keempat array sinkron/memiliki sama panjang, dan simpan nilai statusnya ke dalam sebuah variable -->
<!-- gunakan nilai variable tersebut untuk melakukan evaluasi pada kondisional yang akan melakukan perulangan untuk pengambilan nilai mapel masing-masing student -->
<!-- sebelum nilai mapel tiap student diambil, check terlebih dahulu, jika terdapat nilai yang belum dimasukkan (null), proses perulangan tersebut akan dihentikan -->
<!-- jika nilai student sudah lengkap, proses menghitung nilai rata-rata dilakukan, untuk menghasilkan nilai yang tidak banyak angka desimalnya gunakan function number_format -->
<!-- masukkan dan kumpulkan tiap nilai hasil rata-rata tersebut ke dalam sebuah array -->

<?php
// ----- OLD VERSION ------
// $students   = ["Lina", "Kadi", "Omar", "Padu", "Winda"];
// $math       = [78, 77, 92, 84, 63];
// $science    = [85, 80, 89, null, 79];
// $english    = [55, 67, 72, 80, 94];

// $isNumStudentsEqual = (count($students) == count($math)) && (count($math) == count($science)) && (count($math) == count($english));

// $meanScores = [];
// if ($isNumStudentsEqual) {
//     for ($i = 0; $i < count($students); $i++) {
//         if ($math[$i] == null || $science[$i] == null || $english[$i] == null) {
//             break;
//         }

//         $means = number_format(($math[$i] + $science[$i] + $english[$i]) / 3, 2);
//         array_push($meanScores, $means);
//     }
// }






// ----- NEW VERSION ------
$studentsName   = ["Lina", "Kidi", "Amar", "Pandu", "Lili", "Wirni"];
$examScores     = [78, 77, 92, 84, 63, 80];

$sumScores = 0;
for ($i = 0; $i < count($examScores); $i++) {
    $sumScores += $examScores[$i];
}

$averageOfScores = $sumScores / count($examScores);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Final Scores of Students</title>
</head>

<body>
    <h1>Students Exam Score</h1>
    <p>List of the students score!</p>
    <ol>
        <?php for ($i = 0; $i < count($examScores); $i++) : ?>
            <li><?= "$studentsName[$i]'s score is $examScores[$i]." ?></li>
        <?php endfor; ?>
    </ol>
    <p><?= "And... average of all those students score is <b>$averageOfScores</b>" ?></p>
</body>

</html>