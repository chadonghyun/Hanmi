<?php
include_once('./h_dbconn.php');
if($_SESSION['ss_mb_id'] != "admin@hanmi.co.kr") {
  echo "<script>alert('관리자가 아니면 사용할 수 없는 페이지입니다.');location.replace('/index.php');</script>";
} else if($row['recruiterChk'] == '1') {
  echo "<script>alert('이미 채용된 회원입니다.');location.replace('/sub/recruiter_write_list.php');</script>";
}

$idx = $_GET['idx'];
$email = $_GET['email'];

$query_member = "SELECT * FROM member WHERE data_email = '$email'";
$result_member = mysqli_query($conn, $query_member);
$row_member = mysqli_fetch_assoc($result_member);

$name = $row_member['data_name'];

$query_recruiter = "SELECT * FROM recruiter WHERE recruiterID = '$idx'";
$result_recruiter = mysqli_query($conn, $query_recruiter);
$row_recruiter = mysqli_fetch_assoc($result_recruiter);

$query_recruiter_list = "SELECT * FROM recruiter_list WHERE recruiterListID = '".$row_recruiter['recruiterListID']."'";
$result_recruiter_list = mysqli_query($conn, $query_recruiter_list);
$row_recruiter_list = mysqli_fetch_assoc($result_recruiter_list);

$query = "UPDATE recruiter SET recruiterChk = 1 WHERE recruiterID = ".$idx;
$result = mysqli_query($conn, $query);

$to      = "$email";
$subject = "축하드립니다. ".$name."님 지원서가 합격되었습니다.";
$fp = fopen("mailsend.html","r");
$message = fread($fp,filesize("mailsend.html"));
$message = str_replace("{title}", $row_recruiter_list['title'], $message);
$message = str_replace("{name}", $name, $message);

// html 메일을 보낼 때 꼭 이 헤더가 붙어야한다.
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/html; charset=utf-8";

// Additional headers
$headers[] = "To: Kim<$email>";
$headers[] = "From: 한미약품_칼퇴조<admin@hanmi2023.co.kr>";


$result = mail($to, $subject, $message, implode("\r\n", $headers));
// if($result){echo "성공";}else{echo "실패";}
?>
<script>alert('지원서가 합격되었습니다.');location.replace('/sub/recruiter_write_list.php');</script>