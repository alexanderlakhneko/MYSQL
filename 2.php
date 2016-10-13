<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'dbh') or die('Lost connection');
mysqli_set_charset($mysqli, 'UTF-8');
$query = 'SELECT * FROM object2';
$a = mysqli_query($mysqli, $query);
$res = mysqli_fetch_all($a, MYSQLI_ASSOC);
if(isset($_POST['fio']) && isset($_POST['class']) && isset($_POST['year']) && isset($_POST['poruchenie'])){
    $fio = $_POST['fio'];
    $class = $_POST['class'];
    $year = $_POST['year'];
    $poruchenie = $_POST['poruchenie'];
    $query2 = 'INSERT INTO `object2`(`fio`, `class`, `year`, `poruchenie`) VALUES (?,?,?,?)';
    $stmt = mysqli_prepare($mysqli, $query2);
    mysqli_stmt_bind_param($stmt, 'ssss', $fio, $class, $year, $poruchenie);
        $r = mysqli_stmt_execute($stmt);
        $c = mysqli_insert_id($mysqli);

    header('Location: 2.php');
}
mysqli_close($mysqli);

echo '<pre>';
print_r($res);
echo  '</pre>';
echo "  <form action=\"#\" method=\"post\">
        fio: <input type=\"text\" name=\"fio\">
        class: <input type=\"text\" name=\"class\">
        date: <input type=\"date\" name=\"year\">
        poruchenie: <input type=\"text\" name=\"poruchenie\">
        <input type=\"submit\" value=\"добавить\">
        </form>";