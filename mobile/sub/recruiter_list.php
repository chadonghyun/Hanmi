<?php
  include_once($_SERVER['DOCUMENT_ROOT'].'/mobile/m_header.php');
  if(!isset($_SESSION['ss_mb_id'])) {
    echo "<script>alert('회원만 입장하실 수 있는 페이지입니다. 로그인 후 다시 입장해주세요.');location.replace('/mobile/m_index.php');</script>";
  }
  $query_list = "SELECT * FROM recruiter_list";
  $result_list = mysqli_query($conn, $query_list);
?>

  <!-- 적용 테스트용 임시컨텐츠 -->
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
        <h3>채용공고</h3>
        <div class="recruiter_list_content_nav">
          <a href="../index.html" title="홈">
            <img src="../images/recruiter_home.png" alt="홈아이콘">
          </a>
          <a href="./recruiter_list.html" title="채용">채용</a> &middot;
          <a href="./recruiter_list.html" title="채용공고">채용공고</a>
        </div>
        <ul>
          <?php while($row_list = mysqli_fetch_assoc($result_list)) {
            $query_row = "SELECT * FROM recruiter WHERE data_email = '".trim($_SESSION['ss_mb_id'])."' AND recruiterListID = '".$row_list['recruiterListID']."'";
            $result_row = mysqli_fetch_assoc(mysqli_query($conn, $query_row));
            $from = new DateTime($row_list['startDate']);
            $to = new DateTime($row_list['endDate']);
            $startDate = $from->format('Y-m-d');
            $endDate = $to->format('Y-m-d');
            $dateDiff = $from -> diff($to) -> days;
          ?>
          <li data-idx="<?=$row_list['recruiterListID']?>">
          <?php if(!empty($result_row['recruiterID'])) {?>
            <span class="active_view" data-idx="<?=$result_row['recruiterID']?>">지원서 보기</span>
          <?php } ?>
            <p><?=$row_list['titleSub']?></p>
            <p><?=$row_list['title']?></p>
            <p>
              <span>채용기간</span>
              <span><?=$startDate?> ~ <?=$endDate?></span>
            </p>
            <ul class="cate_list">
              <li>D - <?=($dateDiff)?></li>
              <?php
                $tags = explode(",",$row_list['tag']);
                foreach($tags as $tag) {
              ?>
              <li><?=$tag?></li>
              <?php } ?>
            </ul>
          </li>
          <?php } ?>
        </ul>
        <?php if($_SESSION['ss_mb_id'] == "admin@hanmi.co.kr") {?>
        <a href="/mobile/sub/recruiter_write_list.php" title="지원서 리스트 보기" class="list_view_link">지원서 리스트 보기</a>
        <?php } ?>
      </article>
    </section>
  </main>  
  <?php include_once($_SERVER['DOCUMENT_ROOT'].'/mobile/footer_m.php'); ?>