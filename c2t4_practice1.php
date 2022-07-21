<!-- CASE -->
<!-- 
    1. menambahkan 'gender' dan 'last_name' ke dalam array studentsData
    2. membuat function untuk menyambungkan 'first_name' dan 'last_name' student, dan mengembalikan nilai
    3. membuat function untuk menentukan final score status, dengan menerima input 'exam_score' dan 'quiz_score', ditentukan keluarannya berdasarkan kondiri tertentu:
        - jika 'exam_score' lebih besar dari 80 dan 'quiz_score' lebih besar dari 82, maka akan dikembalikan status 'Passed!'
        - jika 'exam_score' lebih besar dari 80, maka statusnya 'Not passed, take new quiz!'
        - jika 'quiz_score' lebih besar dari 82, maka statusnya 'Not passed, take the remedial exam!'
        - jika semua kondisi diatas tidak terpenuhi, maka kembalikan status 'Not passed, try next semester!'
    4. tampilkan data tiap student dalam bentuk daftar dengan memanggil function yang telah dibuat, sehingga contoh hasilnya seperti 'Alex Tim, a student with id 3150. Your final score status is Not passed, try next semester!'
 -->

<?php
function concateFullName($firstName, $lastName)
{
    return "$firstName $lastName";
}

function finalScoreStatus($examScore, $quizScore)
{
    if (($examScore > 80) && ($quizScore > 82)) {
        return "Passed!";
    } elseif ($examScore > 80) {
        return "Not passed, take new quiz!";
    } elseif ($quizScore > 82) {
        return "Not passed, take the remedial exam!";
    } else {
        return "Not passed, try next semester!";
    }
}

$studentsData   = [
    [
        "id"            => 1220,
        "first_name"    => "Lina",
        "last_name"     => "Karolin",
        "gender"        => "female",
        "exam_score"    => 78,
        "quiz_score"    => 80
    ],
    [
        "id"            => 1221,
        "first_name"    => "Kidi",
        "last_name"     => "Alan",
        "gender"        => "male",
        "exam_score"    => 77,
        "quiz_score"    => 79
    ],
    [
        "id"            => 1222,
        "first_name"    => "Amar",
        "last_name"     => "Tanjung",
        "gender"        => "male",
        "exam_score"    => 92,
        "quiz_score"    => 85
    ],
    [
        "id"            => 1223,
        "first_name"    => "Pandu",
        "last_name"     => "Ginanjar",
        "gender"        => "male",
        "exam_score"    => 84,
        "quiz_score"    => 84
    ],
    [
        "id"            => 1224,
        "first_name"    => "Lili",
        "last_name"     => "Pertiwi",
        "gender"        => "female",
        "exam_score"    => 63,
        "quiz_score"    => 81
    ],
    [
        "id"            => 1225,
        "first_name"    => "Wirni",
        "last_name"     => "Asih",
        "gender"        => "female",
        "exam_score"    => 80,
        "quiz_score"    => 91
    ]
];

$sumScores      = 0;
$sumQuizScores  = 0;

foreach ($studentsData as $student) {
    $sumScores += $student['exam_score'];
    $sumQuizScores += $student['quiz_score'];
}

$averageOfExamScores = $sumScores / count($studentsData);
$averageOfQuizScores = $sumQuizScores / count($studentsData);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Final Scores of Students with Functions</title>
</head>

<body>
    <h1>Students Final Scores with Functions</h1>
    <p>List of the students score!</p>
    <ol>
        <?php foreach ($studentsData as $student) : ?>
            <li><?= "<b>" . concateFullName($student['first_name'], $student['last_name']) . "</b>, student with id $student[id]. Your final score status is <b>" . finalScoreStatus($student['exam_score'], $student['quiz_score']) . "</b>" ?></li>
        <?php endforeach; ?>
    </ol>
    <p><?= "And... average of all those data, <b>average exam score is $averageOfExamScores</b> and <b>average quiz score is $averageOfQuizScores</b>" ?></p>
</body>

</html>