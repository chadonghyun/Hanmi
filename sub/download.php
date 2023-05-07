<?php
include_once("./h_dbconn.php");

$fileID = $_REQUEST['fileID'];

$query = "SELECT * FROM upload_file WHERE fileID = '$fileID'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$nameOrigin = $row['nameOrigin'];
$nameSave = $row['nameSave'];

$fileDir = $_SERVER['DOCUMENT_ROOT']."/upload";
$fullPath = $fileDir."/".$nameSave;
$length = filesize($fullPath);


header("Content-Type: application/octet-stream");
header("Content-Length: $length");
header("Content-Disposition: attachment; filename=".iconv('utf-8','euc-kr',$nameOrigin));
header("Content-Transfer-Encoding: binary");

readfile($fullPath);
?>