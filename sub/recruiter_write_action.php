<?php
include_once('./h_dbconn.php');

$recruiterListID = $_POST['recruiterListID'];
$name = $_POST['name'];
$data_email = $_POST['data_email'];
$telNum = $_POST['telNum'];
$content = $_POST['content'];
$file_id = '';

if(isset($_FILES['fileDoc']) && $_FILES['fileDoc']['name'] != "") {
  $file = $_FILES['fileDoc'];
  $upload_directory = $_SERVER['DOCUMENT_ROOT']."/upload/";
  // $ext_str = "hwp,xls,doc,xlsx,docx,pdf,jpg,gif,png,txt,ppt,pptx";
  $allowed_extensions = explode(',', $ext_str);
  
  $max_file_size = 5242880; // 5MB
  $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
  
  // 확장자 체크
  // if(!in_array($ext, $allowed_extensions)) {
  //     echo "업로드할 수 없는 확장자 입니다.";
  // }
  
  // 파일 크기 체크
  if($file['size'] >= $max_file_size) {
      echo "5MB 까지만 업로드 가능합니다.";
  }

  $path = md5(microtime()) . '.' . $ext;
  if(move_uploaded_file($file['tmp_name'], $upload_directory.$path)) {
    $file_id = md5(uniqid(rand(), true));
    $name_orig = $file['name'];
    $name_save = $path;
    $query_file = "INSERT INTO upload_file (fileID, nameOrigin, nameSave, regDate) VALUES('$file_id','$name_orig','$name_save',now())";
    $result_file = mysqli_query($conn, $query_file);
  }

}
$query = "INSERT INTO recruiter(recruiterID, recruiterListID, data_email, name, telNum, content, fileID, recruiterChk) VALUES(0, '$recruiterListID', '$data_email', '$name', '$telNum', '$content', '$file_id', 0)";
$result = mysqli_query($conn, $query);

?>
<script>alert('입력이 완료되었습니다.');location.replace('./recruiter_list.php');</script>