<?php


require('./conn.php');



$rec = $_POST['rec'];
$content = $_POST['content'];
$pos = $_POST['pos'];
$time=time();
$sql = "insert into msg (rec,pos,content,isread,createtime) values ('$rec','$pos','$content',0,'$time')";
$result = mysqli_query($link, $sql);
$insertId = mysqli_insert_id($link);
if ($insertId) {
    $returnArr = ['status' => 1,'info' => $insertId,];
} else {
    $returnArr = ['status' => 0,'info' => '',];
}
echo json_encode($returnArr);
mysqli_close($link);
exit();






