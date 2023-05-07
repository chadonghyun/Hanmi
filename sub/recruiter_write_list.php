<?php include_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
<?php
  if($_SESSION['ss_mb_id'] != "admin@hanmi.co.kr") {
    echo "<script>alert('관리자만 입장하실 수 있는 페이지입니다.');location.replace('/index.php');</script>";
  }
  $query_list = "SELECT * FROM recruiter ORDER BY recruiterID DESC";
  $result_list = mysqli_query($conn, $query_list);
  $query_list_cnt = "SELECT COUNT(*) AS cnt FROM recruiter";
  $result_list_cnt = mysqli_query($conn, $query_list_cnt);
  $row_list_cnt = mysqli_fetch_assoc($result_list_cnt);
?>
  <main>
  <dialog id="recruiterModal"></dialog>
    <section class="recruiter_title">
      <h2 class="hidden">채용공고 대문</h2>
      <article class="recruiter_title_content">
        <h2>채용</h2>
        <h3>채용공고</h3>
        <p>K-Health 기업으로 도약하기 위한<br>핵심인재를 확보하고 있습니다.</p>
      </article>
    </section>
    
    <section class="recruiter_list">
      <h2 class="hidden">채용공고 리스트</h2>
      <article class="recruiter_list_content">
        <h3>채용공고 리스트 (관리자)</h3>
        <div class="recruiter_list_content_nav">
          <a href="/index.php" title="홈">
            <img src="../images/recruiter_home.png" alt="홈아이콘">
          </a>
          <a href="./recruiter_list.php" title="채용">채용</a> &middot;
          <a href="./recruiter_list.php" title="채용공고">채용공고 리스트 (관리자)</a>
        </div>
        <table class="table table-striped caption-top w-75 m-auto mt-5">
          <caption class="align-items-end"><span class="bi bi-list"></span> Total <?=$row_list_cnt['cnt']?></caption>
          <thead>
            <tr class="bg-light text-center">
              <th scope="col p-3">번호</th>
              <th scope="col p-3">공고이름</th>
              <th scope="col p-3">지원자 성함</th>
              <th scope="col p-3">지원자 ID</th>
              <th scope="col p-3">지원자 연락처</th>
              <th scope="col p-3">채용여부</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = mysqli_fetch_assoc($result_list)) {
              $query_recruiter_list = "SELECT * FROM recruiter_list WHERE recruiterListID = ".$row['recruiterListID'];
              $result_recruiter_list = mysqli_query($conn, $query_recruiter_list);
              $row_recruiter_list = mysqli_fetch_assoc($result_recruiter_list);
            ?>
            <tr>
              <td><?=$row['recruiterID']?></td>
              <td><a href="#none" title="<?=$row_recruiter_list['title']?>" data-idx="<?=$row['recruiterID']?>"><?=$row_recruiter_list['title']?></a></td>
              <td><?=$row['name']?></td>
              <td><?=$row['data_email']?></td>
              <td><?=$row['telNum']?></td>
              <td><?=($row['recruiterChk'] == '0' ? '미확인' : '채용완료')?></td>
            </tr>
            <?}?>
          </tbody>
        </table>
      </article>
    </section>
  </main>
  <?php include_once($_SERVER['DOCUMENT_ROOT'].'/footer.php') ?>