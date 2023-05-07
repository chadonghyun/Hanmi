<?php
include_once('./h_dbconn.php');

$query_list = "SELECT * FROM recruiter_list WHERE recruiterListID = ".$_GET['idx'];
$result_list = mysqli_query($conn, $query_list);
$row_list = mysqli_fetch_assoc($result_list);
$from = new DateTime($row_list['startDate']);
$to = new DateTime($row_list['endDate']);
$startDate = $from->format('Y.m.d');
$endDate = $to->format('Y.m.d');
$dateDiff = $from -> diff($to) -> days;

$query_recruiter = "SELECT * FROM recruiter WHERE data_email = '".$_SESSION['ss_mb_id']."' AND recruiterListID = ".$_GET['idx'];
$result_recruiter = mysqli_query($conn, $query_recruiter);
$row_recruiter = mysqli_fetch_assoc($result_recruiter);
?>
<div class="recruiter_top">
  <div>
    <span class="emp">D - <?=$dateDiff?></span>
    <span><?=$row_list['title']?></span>
  </div>
  <a href="#none" title="지원서 작성" id="recruiterWrite" data-idx="<?=$_GET['idx']?>" <?php if(!empty($row_recruiter)){ ?>onclick="alert('이미 글을 작성한 회원입니다.');location.replace('./recruiter_list.php');return false;"<?php } ?>>지원서 작성</a>
</div>
<div class="recuiter_wrap">
  <p class="title_sub"><?=$row_list['titleSub']?></p>
  <h2><?=$row_list['title']?></h2>
  <div class="recruiter_info">
    <p>공고마감 <span class="emp">D - <?=$dateDiff?></span> 확인해주세요 !</p>
    <p>채용기간 <?=$startDate?> ~ <?=$endDate?></p>
  </div>
  <h2>지원자격</h2>
  <pre><?php if(!empty($row_list['image01'])) echo "<img src='".$row_list['image01']."' alt='image01'>"; ?><?=$row_list['content02']?><?=$row_list['content01']?></pre>
  <h2>소개 및 업무내용</h2>
  <pre><?php if(!empty($row_list['image02'])) echo "<img src='".$row_list['image02']."' alt='image02'>"; ?><?=$row_list['content02']?></pre>
</div>