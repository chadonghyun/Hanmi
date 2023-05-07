<?php
  $file_path = realpath(__FILE__); //php파일의 절대 서버 경로
  $file_name = basename(__FILE__); //php파일 이름
  $path = str_replace(basename(__FILE__), '', $file_path); //php파일 이름을 뺀 절대 서버 경로
  $root_path = $_SERVER['DOCUMENT_ROOT']; // 서버의 ROOT 경로
  $file_url = preg_replace("'\/[^/]*\.php$'i", "/", $_SERVER['PHP_SELF']); //php파일의 상대경로
  $base_filename = basename($_SERVER['PHP_SELF']); //현재 페이지 파일명
  $url = ($_SERVER['HTTPS'] == 'on')?'https://':'http://';
  $url .= ($_SERVER['SERVER_PORT'] != '80')?$_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT']:$_SERVER['HTTP_HOST']; 
  include_once($root_path.'/mobile/sub/m_dbconn.php');
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

  
  <?php // recuiter_list.php 방문시 실행 {
  if($base_filename == 'recruiter_write_list.php') {
    $title = "한미약품_채용리스트 (관리자)";
  ?>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="/mobile/skin/recruiter/style.css" type="text/css">

  <?php } // } recuiter_list.php end ?>

  <!-- 파비콘 -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico"/>
  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <!-- css3추가속성시 접두사 자동으로 붙여주는 스크립트 -->
  <script src="/mobile/skin/prefixfree.min.js"></script>
  <!-- 제이쿼리 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- 제이쿼리 ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="/mobile/skin/reset.css" type="text/css">
  <link rel="stylesheet" href="/mobile/skin/base.css" type="text/css">
  <link rel="stylesheet" href="/mobile/skin/common_m.css" type="text/css">
  <link rel="stylesheet" href="/mobile/skin/common_t.css" type="text/css">
  <link rel="stylesheet" href="/mobile/skin/common.css" type="text/css">
  <script src="/mobile/skin/common.js" defer></script>

  <?php
  // m_index php 방문시 실행 {
  if($base_filename == 'm_index.php') {
    $title = "한미약품";  
  ?>
  <link rel="stylesheet" href="./skin/main/style.css">
  <script src="/mobile/skin/main/main.js" defer></script>
  <!-- 지도스크립트 -->
  <script class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

  <?php } // } m_index end
  // intro_m php 방문시 실행 {
  if($base_filename == 'intro_m.php') {
    $title = "한미약품_소개";
  ?>
  <link rel="stylesheet" href="/mobile/skin/intro/intro_m.css" type="text/css">
  <link rel="stylesheet" href="/mobile/skin/intro/intro_t.css" type="text/css">
  <script src="/mobile/skin/intro/intro_m.js"></script>
  
  <?php } // } intro_m end
  // recuiter_list.php 방문시 실행 {
  if($base_filename == 'recruiter_list.php') {
    $title = "한미약품_채용";
  ?>
  
    <link rel="stylesheet" href="/mobile/skin/recruiter/style.css" type="text/css">
    <script src="/mobile/skin/recruiter/recruiter.js" defer></script>

  <?} // } recuiter_list.php end 
  // m_login.php 방문시 실행 {
  if($base_filename == 'm_login.php') {
    $title = "한미약품_로그인";  
  ?>
  <link rel="stylesheet" href="/mobile/skin/member/m_login.css" type="text/css">

  <?php } // } m_login.php end
  // m_join.php 방문시 실행 {
    if($base_filename == 'm_join.php') {
      $title = "한미약품_회원가입";
  ?>
  
  <link rel="stylesheet" href="/mobile/skin/member/m_join.css" type="text/css">
  <script src="/mobile/skin/member/m_join.js" defer></script>
  <?php } // } m_join.php end
  // m_join_suc.php 방문시 실행 {
    if($base_filename == 'm_join_suc.php'){
      $title = "한미약품_회원가입완료";
  ?>
  <link rel="stylesheet" href="/mobile/skin/member/m_join_suc.css" type="text/css">
  <?php } // } m_join_suc.php end ?>
  <title><?=$title?></title>

</head>
<body>
  <!-- 여기서부터 긁어가시면 됩니다. -->
  <!-- 20230305 강병영 -->
  <!-- 서브페이지일시 바로 아래 코드 주석 해제 후 <header> 주석  -->
    
  <header>
    <input type="checkbox" name="menuCheck" id="menuCheck">
    <nav id="mHeader">
      <h1 id="logo">
        <a href="/mobile/m_index.php" title="메인으로 돌아가기">
          <img src="/mobile/images/Logo_s.png" alt="logo">
        </a>
      </h1>
      <label class="hamburger" id="mMenu" for="menuCheck">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </label>
    </nav>
    <div class="gnb_wrap">
      <ul id="gnb">
        <li>
          <a href="#none" title="기업">기업</a>
          <ul class="lnb">
            <li>
              <a href="/mobile/intro_m.php" title="인사말">인사말</a>
            </li>
            <li>
              <a href="/mobile/intro_m.php" title="한미소개">한미소개</a>
            </li>
            <li>
              <a href="/mobile/intro_m.php" title="오시는 길">오시는 길</a>
            </li>
            <li>
              <a href="/mobile/intro_m.php" title="ESG">ESG</a>
            </li>
            <li>
              <a href="#none" title="뉴스">뉴스</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#none" title="제품">제품</a>
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
          <a href="/mobile/sub/recruiter_list.php" title="채용">채용</a>
        </li>
      </ul>
      <ul id="memberMenu">
        <li>
        <?php if(!isset($_SESSION['ss_mb_id'])) { ?>
          <a href="/mobile/sub/m_login.php" title="로그인">로그인</a>
          <?php } else { ?>
          <a href="/mobile/sub/m_logout.php" title="로그아웃">로그아웃</a>
          <?php } ?>
        </li>
        <?php if(!isset($_SESSION['ss_mb_id'])) { ?>                
        <li>
          <a href="/mobile/sub/m_join.php" title="회원가입">회원가입</a>
        </li>
        <?php } ?>
        <li>
          <a href="#none" title="고객센터">고객센터</a>
        </li>
      </ul>
    </div>
  </header>