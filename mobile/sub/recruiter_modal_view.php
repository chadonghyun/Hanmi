<?php
include_once('./m_dbconn.php');

$query = "SELECT * FROM recruiter WHERE recruiterID = ".$_GET['idx'];
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$query_list = "SELECT * FROM recruiter_list WHERE recruiterListID = ".$row['recruiterListID'];
$result_list = mysqli_query($conn, $query_list);
$row_list = mysqli_fetch_assoc($result_list);
$from = new DateTime($row_list['startDate']);
$to = new DateTime($row_list['endDate']);
$dateDiff = $from -> diff($to) -> days;

?>
<div class="recruiter_top view">
  <div>
    <span class="emp">D - <?=$dateDiff?></span>
    <span><?=$row_list['title']?></span>
    <a href="#none" class="recruiter_close">
      <span></span>
      <span></span>
    </a>
  </div>
</div>
<div class="recuiter_wrap view">
<h2>지원내용</h2>
  <table class="recruiter_table">
    <tbody>
      <tr>
        <th><label for="name">이름</label></th>
        <td><input type="text" name="name" id="name" readonly value="<?=$row['name']?>"></td>
      </tr>
      <tr>
        <th><label for="email">이메일</label></th>
        <td><input type="text" name="email" id="email" readonly value="<?=$row['data_email']?>"></td>
      </tr>
      <tr>
        <th><label for="tel">연락처</label></th>
        <td><input type="text" name="tel" id="tel" readonly value="<?=$row['telNum']?>"></td>
      </tr>
      <tr>
        <th><label for="content">내용</label></th>
        <td><pre name="content" id="content" readonly><?=$row['content']?></pre></td>
      </tr>
      <tr>
        <th><label for="fileDoc">제출서류</label></th>
        <td>
          <label for="fileDoc" class="file_doc_label">
            <?php 
              $query_file = "SELECT * FROM upload_file WHERE fileID = '".$row['fileID']."'";
              $result_file = mysqli_query($conn, $query_file);
              $row_file = mysqli_fetch_assoc($result_file);
            ?>
            <div><?=$row_file['nameOrigin']?></div>
          </label>
          <input type="file" name="fileDoc" id="fileDoc" disabled>
        </td>
      </tr>
    </tbody>
  </table>
  <button type="submit" class="recruiter_submit hidden"></button>
</div>