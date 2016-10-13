<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'dbh') or die('Lost connection');
mysqli_set_charset($mysqli, 'UTF-8');
$query = 'SELECT * FROM object1';
$f = mysqli_query($mysqli, $query);
$res = mysqli_fetch_all($f, MYSQLI_ASSOC);
if(isset($_POST['ekz'])){
    $a = $_POST['ekz'] ;
    $query2 = 'DELETE FROM `object1` WHERE `ekzamen`=?';
    $stmt = mysqli_prepare($mysqli, $query2);
    mysqli_stmt_bind_param($stmt, 's', $a);
    $r = mysqli_stmt_execute($stmt);
    $b = mysqli_insert_id($mysqli);
    header('Location: 1.php');
}
mysqli_close($mysqli);

echo '<pre>';
print_r($res);
echo  '</pre>';
echo "  <form action=\"#\" method=\"post\">
        Удалить информаци об экзамене: <input type=\"text\" name=\"ekz\">
        <input type=\"submit\" value=\"удалить\">
        </form>";

