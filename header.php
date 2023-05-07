<?php
  $file_path = realpath(__FILE__); //php파일의 절대 서버 경로
  $file_name = basename(__FILE__); //php파일 이름
  $path = str_replace(basename(__FILE__), '', $file_path); //php파일 이름을 뺀 절대 서버 경로
  $root_path = $_SERVER['DOCUMENT_ROOT']; // 서버의 ROOT 경로
  $file_url = preg_replace("'\/[^/]*\.php$'i", "/", $_SERVER['PHP_SELF']); //php파일의 상대경로
  $base_filename = basename($_SERVER['PHP_SELF']); //현재 페이지 파일명
  $url = ($_SERVER['HTTPS'] == 'on')?'https://':'http://';
  $url .= ($_SERVER['SERVER_PORT'] != '80')?$_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT']:$_SERVER['HTTP_HOST']; 
  include_once($root_path.'/sub/h_dbconn.php');
  
  $query_member_name = "SELECT data_name FROM member WHERE data_email = '".$_SESSION['ss_mb_id']."'";
  $result_member_name = mysqli_query($conn, $query_member_name);
  $row_member_name = mysqli_fetch_assoc($result_member_name);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- og메타태그 -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://hanmi2023.dothome.co.kr/index.php#">
  <meta property="og:title" content="한미약품">
  <meta property="og:image" content="http://hanmi2023.dothome.co.kr/images/Logo_s.png">
  <meta property="og:description" content="완제 의약품 제조업체 한미약품">
  <meta property="og:site_name" content="한미약품">
  <meta property="og:title" content="한미약품" /> 
  <meta property="og:url" content="http://hanmi2023.dothome.co.kr/index.php#" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="http://hanmi2023.dothome.co.kr/images/Logo_s.png" /> 
  <meta property="og:title" content="한미약품" /> 
  <meta property="og:description" content="완제 의약품 제조업체 한미약품" />   

  <!-- SEO -->
  <meta name="description" content="완제 의약품 제조업체 한미약품"/>
  <meta name="keywords" content="한미약품, 한미, 텐텐, hanmi" />
  <meta name="author" content="칼퇴조"/>

  <!-- 파비콘 -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico"/>
  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <!-- css3추가속성시 접두사 자동으로 붙여주는 스크립트 -->
  <script src="/skin/prefixfree.min.js"></script>
  <!-- 제이쿼리 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- 제이쿼리 ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <?php 
  // recruiter_write_list.php 방문시 실행 {
  if($base_filename == 'recruiter_write_list.php') {
    $title = "한미약품_채용리스트 (관리자)";
  ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="/skin/recruiter/style.css" type="text/css">
  <script src="/skin/recruiter/recruiter_sub.js" defer></script>
  <?} // } recruiter_write_list.php end ?>
  <link rel="stylesheet" href="/skin/reset.css" type="text/css">
  <link rel="stylesheet" href="/skin/base.css" type="text/css">
  <link rel="stylesheet" href="/skin/common.css" type="text/css">
  <script>
    //배열객체를 사용하여 스마트폰의 종류를 작성한다.
    let mobile = new Array('Android','iPhone','iPad','SAMSUNG','BlackBerry','Windows Phone','Windows CE','MOT','SonyEricsson','Nokia');

    //모바일에서 pc보기를 클릭해서 다시 pc페이지가 보이게
    if(document.URL.match('move_pc_screen')) mobile = null;

    //만약에 위 배열 값 개수만큼 반복하여 사용자가 접속한 스마트폰의 종류를 체크하여 맞다면 아래 내용을 실행한다.
    for(let i in mobile){ //in 키워드 값이 있으면 true, 없으면 false
      if(navigator.userAgent.match(mobile[i]) != null){ //일치하는게 있으면
        location.href='/mobile/m_index.php'; //모바일로 접속한다.
        break;
      }
    }
  </script>

  <?php
  // index php 방문시 실행 {
  if($base_filename == 'index.php') {
    $title = "한미약품";  
  ?>
  <link rel="stylesheet" href="./skin/main/style.css">
  <script src="./skin/main/main.js" defer></script>
  <script src="./skin/main/main_01.js" defer></script>
  <script class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
  <?php } // } index end
  // intro php 방문시 실행 {
  if($base_filename == 'intro.php') {
    $title = "한미약품_소개";
  ?>
  <link rel="stylesheet" href="./skin/intro/intro_pc.css" type="text/css">
  <script src="./skin/intro/intro.js"></script>
  <?php } // } intro end
  // recuiter_list.php 방문시 실행 {
  if($base_filename == 'recruiter_list.php') {
    $title = "한미약품_채용";
  ?>
    <link rel="stylesheet" href="/skin/recruiter/style.css" type="text/css">
    <script src="/skin/recruiter/recruiter.js" defer></script>
  <?} // } recuiter_list.php end 
  // h_login.php 방문시 실행 {
  if($base_filename == 'h_login.php') {
    $title = "한미약품_로그인";  
  ?>
  <link rel="stylesheet" href="./css/login.css" type="text/css">
  <?php } // } h_login.php end
  // h_join.php 방문시 실행 {
    if($base_filename == 'h_join.php') {
      $title = "한미약품_회원가입";
  ?>
  
  <link rel="stylesheet" href="./css/join.css" type="text/css">
  <script src="./css/join.js" defer></script>
  <?php } // } h_join.php end
  // join_sub.php 방문시 실행 {
    if($base_filename == 'join_suc.php'){
      $title = "한미약품_회원가입완료";
  ?>
  <link rel="stylesheet" href="./css/join_suc.css" type="text/css">
  <?php } // } join_suc.php end ?>
  <title><?=$title?></title>

</head>
<body>
  <!-- 여기서부터 긁어가시면 됩니다. -->
  <!-- 20230305 강병영 -->
  <!-- 서브페이지일시 바로 아래 코드 주석 해제 후 <header> 주석  -->
    
  <?php if($base_filename == 'index.php') { ?>
  <header>
  <?php } else { ?>
  <header class="header_sub">
  <?php } ?>
    <nav id="pcHeader">
      <h1 id="logo">
        <a href="<?=$url?>/index.php" title="메인으로 돌아가기">
          <img src="/images/Logo_s.png" alt="logo">
        </a>
      </h1>
      <ul id="gnb">
        <li>
          <a href="/intro.php" title="기업">기업</a>
          <div class="lnb_bg"></div>
          <ul class="lnb">
            <li>
              <a href="/intro.php" title="인사말">인사말</a>
            </li>
            <li>
              <a href="/intro.php" title="한미소개">한미소개</a>
            </li>
            <li>
              <a href="/intro.php" title="오시는 길">오시는 길</a>
            </li>
            <li>
              <a href="/intro.php" title="ESG">ESG</a>
            </li>
            <li>
              <a href="#none" title="뉴스">뉴스</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#none" title="제품">제품</a>
          <div class="lnb_bg"></div>
          <ul class="lnb">
            <li>
              <a href="#none" title="제품소식">제품소식</a>
            </li>
            <li>
              <a href="#none" title="제품검색">제품검색</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#none" title="연구">연구</a>
          <div class="lnb_bg"></div>
          <ul class="lnb">
            <li>
              <a href="#none" title="소개">소개</a>
            </li>
            <li>
              <a href="#none" title="R&D 네트워크">R&D 네트워크</a>
            </li>
            <li>
              <a href="#none" title="파이프라인">파이프라인</a>
            </li>
            <li>
              <a href="#none" title="기술">기술</a>
            </li>
            <li>
              <a href="#none" title="Open Innovation">Open Innovation</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#none" title="투자">투자</a>
          <div class="lnb_bg"></div>
          <ul class="lnb">
            <li>
              <a href="#none" title="주가정보">주가정보</a>
            </li>
            <li>
              <a href="#none" title="재무정보">재무정보</a>
            </li>
            <li>
              <a href="#none" title="IR센터">IR센터</a>
            </li>
            <li>
              <a href="#none" title="공시정보">공시정보</a>
            </li>
            <li>
              <a href="#none" title="경영진">경영진</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="/sub/recruiter_list.php" title="채용">채용</a>
        </li>
      </ul>
      <ul id="memberMenu">
        <?php if(!isset($_SESSION['ss_mb_id'])) { ?>
        <li>
          <a href="/sub/h_login.php" title="로그인">로그인</a>
        </li>
        <?php } else { ?>
        <li>
          <a href="#none" title="<?=$row_member_name['data_name']?>"><?=$row_member_name['data_name']?> 님</a>
        </li>
        <li>
          <a href="/sub/h_logout.php" title="로그아웃">로그아웃</a>
        </li>
        <?php } ?>
        <?php if(!isset($_SESSION['ss_mb_id'])) { ?>
          <li>
            <a href="/sub/h_join.php" title="회원가입">회원가입</a>
          </li>
        <?php } ?>
        <li>
          <a href="#none" title="고객센터">고객센터</a>
        </li>
      </ul>
    </nav>
  </header>