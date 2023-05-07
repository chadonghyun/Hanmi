<?php
include_once('./h_dbconn.php');

$query_list = "SELECT * FROM recruiter_list WHERE recruiterListID = ".$_GET['idx'];
$result_list = mysqli_query($conn, $query_list);
$row_list = mysqli_fetch_assoc($result_list);
$from = new DateTime($row_list['startDate']);
$to = new DateTime($row_list['endDate']);
$dateDiff = $from -> diff($to) -> days;

$query_member = "SELECT * FROM member WHERE data_email = '".$_SESSION['ss_mb_id']."'";
$result_member = mysqli_query($conn, $query_member);
$row_member = mysqli_fetch_assoc($result_member);
?>
<div class="recruiter_top write">
  <div>
    <span class="emp">D - <?=$dateDiff?></span>
    <span><?=$row_list['title']?></span>
  </div>
  <a href="#none" title="작성완료" class="recruiter_submit">작성완료</a>
</div>
<div class="recuiter_wrap write">
  <h2>지원하기</h2>
  <form action="recruiter_write_action.php" method="post" name="recruiter_write" class="recruiter_write" enctype="multipart/form-data">
    <input type="hidden" name="recruiterListID" value="<?=$_GET['idx']?>">
    <table class="recruiter_table">
      <caption class="hidden">지원하기 폼</caption>
      <tbody>
        <tr>
          <th><label for="name">이름</label></th>
          <td><input type="text" name="name" id="name" value="<?=$row_member['data_name']?>" readonly required></td>
        </tr>
        <tr>
          <th><label for="email">이메일</label></th>
          <td><input type="text" name="data_email" id="email" value="<?=$row_member['data_email']?>" readonly required></td>
        </tr>
        <tr>
          <th><label for="tel">연락처</label></th>
          <td><input type="text" name="telNum" id="tel" value="<?=$row_member['data_phone']?>"  readonly required></td>
        </tr>
        <tr>
          <th><label for="content">내용</label></th>
          <td><textarea name="content" id="content" required></textarea></td>
        </tr>
        <tr>
          <th><label for="fileDoc">제출서류</label></th>
          <td>
            <label for="fileDoc" class="file_doc_label">
              <div></div>
            </label>
            <input type="file" name="fileDoc" id="fileDoc">
          </td>
        </tr>
      </tbody>
    </table>
    <button type="submit" class="recruiter_submit hidden"></button>
  </form>
</div>