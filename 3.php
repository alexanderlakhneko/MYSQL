<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'dbh') or die('Lost connection');
mysqli_set_charset($mysqli, 'UTF-8');
if(isset($_POST['ekz'])){
    $a = $_POST['ekz'] ;
    $query2 = 'SELECT `day`, `predmet`, `prepod` FROM `object3` WHERE `fakultet`=?';
    $stmt = mysqli_prepare($mysqli, $query2);
    mysqli_stmt_bind_param($stmt, 's', $a);
    $r = mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $n, $ln, $fn);
    mysqli_stmt_fetch($stmt);
    echo $n, ', ', $ln, ', ', $fn;
}
mysqli_close($mysqli);

echo "  <form action=\"#\" method=\"post\">
        Просмотр информации по факультетам: <input type=\"text\" name=\"ekz\">
        <input type=\"submit\" value=\"Просмотр\">
        </form>";
