<?php
  include_once($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>
<main>
  	<!-- 사이드메뉴 -->	
<aside class="ms_side">	
  <ul>	
    <li>	
      <a href="#none" title="제품검색">	
        <i class="fas fa-pills"></i>	
        <p>제품검색</p>	
      </a>	
    </li>	
    <li>	
      <a href="#none" title="판매약국검색" class="map_search">	
        <i class="fas fa-store"></i>	
        <p>판매약국검색</p>	
      </a>	
    </li>	
    <li>	
      <a href="#" title="위로 바로가기">	
        <i class="fa-regular fa-circle-up"></i>	
        <p>위로 바로가기</p>	
      </a>	
    </li>	
  </ul>	
</aside>
<!-- 1sec_슬라이드 -->
<section class="m_slide">
  <h2>메인슬라이드</h2>
  <ul class="ms_box">
    <li>
      <div>
        <h3>R&D No.1</h3>
        <p>한미약품은 매년 지속적인 R&D 투자를 통해비만당뇨, 항암, 면역질환, 희귀질환 분야의<br> 글로벌 혁신신약 개발에 매진하고 있습니다. </p>
      </div>
      <img src="./images/main_slide01.jpg" alt="슬라이드1">
    </li>
    <li>
      <div>
        <span class="ms_subtitle">인류 건강증진에 노력하는</span>
        <h3>건강한 기업</h3>
        <p>한미약품은 인류 건강증진에 기여하고 건강한 사회적 기업으로 성장하기 위해 최선을 다하고 있습니다.</p>
      </div>
      <img src="./images/main_slide06.jpg" alt="슬라이드1">
    </li>
    <li>
      <div>
        <h3>창조와 혁신, 도전</h3>
        <p>남들과 똑같은 길을 걷지 않고, 창조와 도전 정신으로 혁신하는' 글로벌 제약기업으로 도약하겠습니다.</p>
      </div>
      <img src="./images/main_slide09.jpg" alt="슬라이드1">
    </li>
  </ul>

  <div class="ms_gauge"></div>
  <div class="ms_arrow"></div>
  <div class="ms_btn">
    <span class="ms_on">&nbsp;</span>
    <span>&nbsp;</span>
    <span>&nbsp;</span>
  </div>
  <i class="fas fa-pause"></i>
  <ul class="ms_search">
    <li>
      <i class="fas fa-pills"></i>
      <a href="#">
        <span class="m_color00">제품</span>을 검색해 보세요
        <i class="fas fa-magnifying-glass"></i>
      </a>

    </li>
    <li>
      <i class="fas fa-store"></i>
      <a href="#" title="판매약국검색" class="map_search">
      <span class="m_color00">판매약국</span>을 검색해 보세요
      <i class="fas fa-magnifying-glass"></i>
      </a>
    </li>
  </ul>
  <div class="ms_scroll"><img src="./images/main_scroll.png" alt="스크롤"></div>
</section>

<!-- 2sec 제품소개 -->
<section class="m_product">
  <h2>한미제품</h2>
  <hr>
  <article>
    
  <!-- Swiper -->

  <div class="swiper m_product_slider">
    <div class="swiper-wrapper p_slide">
      <div class="swiper-slide">
      <div class="ps_wrap">
        <a href="">
        <div>
          <div class="img_wrap"><img src="./images/main_product01.png" alt=""></div>
        </div>
        <div>
          <p class="p_badge01">일반의약품</p>
          <div class="p_info">
            <h3>텐텐</h3>
          <hr>
          <p>비타민 A, C, D 등의 보급</p>
          <p>발육기, 병중·병후, 육체피로</p>
          <p>눈의 건조함의 완화, 야맹증</p>
          </div>
        </div>
      </a>
      </div>
    </div>
      <div class="swiper-slide">
      <div class="ps_wrap">
        <a href="">
        <div>
          <div class="img_wrap"><img src="./images/main_product02.png" alt=""></div>
        </div>
        <div>
          <p class="p_badge01">일반의약품</p>
          <div class="p_info">
            <h3>목앤</h3>
          <hr>
          <p>목(인후)의 염증으로 인한 목의 통증</p>
          <p>목의 부종(부기)</p>
          <p>목의 불쾌감, 목이 쉼</p>
          <p>구내염(입안염)</p>
          </div>
        </div>
      </a>
      </div>
    </div>
      <div class="swiper-slide">
      <div class="ps_wrap">
        <a href="">
        <div>
          <div class="img_wrap"><img src="./images/main_product03.png" alt=""></div>
        </div>
        <div>
          <p class="p_badge02">전문의약품</p>
          <div class="p_info">
            <h3>로수젯정</h3>
          <hr>
          <p>원발성 고콜레스테롤혈증</p>
          <p>HDL-콜레스테롤(HDL-C)을 증가시키기 위한 식이요법의 보조제</p>
          <p>투여하기 전 또는 투여 중인 환자는 반드시 표준 콜레스테롤 저하식을 지속적으로 해야 한다.</p>
          </div>
        </div>
      </a>
      </div>
    </div>
      <div class="swiper-slide">
      <div class="ps_wrap">
        <a href="">
        <div>
          <div class="img_wrap"><img src="./images/main_product06.png" alt=""></div>
        </div>
        <div>
          <p class="p_badge02">전문의약품</p>
          <div class="p_info">
            <h3>아모잘탄정</h3>
          <hr>
          <p>순환기용치료제</p>
          <p>암로디핀 또는 로사르탄 단독요법으로 혈압이 적절하게 조절되지 않는 본태성 고혈압</p>
          <p>제2기 고혈압 환자에서 치료 목표 혈압에 도달하기 위해 복합제 투여가 필요한 환자의 초기요법</p>
          </div>
        </div>
      </a>
      </div>
    </div>
      <div class="swiper-slide">
      <div class="ps_wrap">
        <a href="">
        <div>
          <div class="img_wrap"><img src="./images/main_product05.png" alt=""></div>
        </div>
        <div>
          <p class="p_badge03">의료기기</p>
          <div class="p_info">
            <h3>HANMI COVID-19 Home Test</h3>
          <hr>
          <p>감염체 진단 면역검사시약</p>
            <p>검체채취용도구</p>
            <p>눈의 건조함의 완화, 야맹증</p>
          </div>
        </div>
      </a>
      </div>
    </div>
    </div>
  </div>
  <span class="p_lbtn">&nbsp;</span>
  <span class="p_rbtn">&nbsp;</span>
  <span class="p_page"><span class="pg_border01">05</span>/05</span>
  <div class="p_bgimg">
    <img src="./images/main_2secbg.png" alt="배경요소" class="t_img">
  </div>
  </article>
</section>

<!-- 3sec 소개 -->
<section class="m_intro">

  <h2>한미소개</h2>
  <hr>
  <p class="m_txt01">한미약품은 <span class="m_color01">창조</span>와 <span class="m_color01">도전</span>을 가치로<br> 
    신약개발에 매진하는 <span class="m_color01">R&D중심</span> 제약기업입니다.</p>
  <p class="m_txt02">한미약품은 제약산업의 생명인 R&D에 집중함으로써 신약 파이프라인을 최대한 확보해 세계 무대에서 통하는<br>글로벌 신약의 탄생 가능성을 높여 나가겠습니다.</p>

  <ul class="mi_wrap">
    <li>
      <i class="fa-brands fa-fort-awesome"></i>
      <p>연혁</p>
      <p><span class="mi_size01 count1">50</span>년</p>
      <p>Since 1973</p>
    </li>
    <li>
      <i class="fa-solid fa-award"></i>
      <p>원외처방</p>
      <p><span class="mi_size01 count2">0</span>위</p>
      <p>5년연속</p>
    </li>
    <li>
      <i class="fa-solid fa-atom count"></i>
      <p>R&D투자금</p>
      <p><span class="mi_size01 count3">1000</span>억</p>
      <p>업계최초</p>
    </li>
    <li>
      <i class="fa-solid fa-book-bookmark"></i>
      <p>제품</p>
      <p><span class="mi_size01 count4">251</span>개</p>
      <p>&nbsp;</p>
    </li>
  </ul>
</section>

<!-- 4sec 한미의 미래 -->
<section class="m_future">
  <h2>한미의 미래</h2>
  <hr>
  <p class="m_txt01"><span class="m_color02">창조와 도전</span>으로 글로벌 기업 도약<br>
    세계가 인정하는 <span class="m_color02">복합신약 명가</span></p>
  <p class="m_txt02">1973년 창사아래 50 년간의 제약산업의 경험을 바탕으로 연구개발을 활발하게 전개하고 있습니다.<br>
    다가오는 21세기 제약산업의 선두주자로 거듭나기 위해 한미약품은 최선을 다하고 있습니다.</p>

    <article class="mf_wrap">
      <h2 class="hidden">&nbsp;</h2>
      <div>
        <a href="#" title="New Drug Development">
          <div class="mf_circle">
            <img src="./images/main_4sec_icon01.png" alt="New Drug Development">
          </div>
          <p class="mf_txt01">New Drug Development</p>
        </a>
      </div>
      <div>
        <a href="#" title="R&D Open Innovation">
          <p class="mf_txt02">R&D Open Innovation</p>
          <div class="mf_circle">
            <img src="./images/main_4sec_icon02.png" alt="R&D Open Innovation">
          </div>
        </a>
      </div>
      <div>
        <a href="./intro.php" title="ESG 경영">
          <div class="mf_circle">
          <img src="./images/main_4sec_icon03.png" alt="ESG 경영">
          </div>
          <p class="mf_txt01">ESG 경영</p>
        </a>
      </div>
    </article>
</section>

<!-- 5sec 투자정보 -->
<section class="m_investment">
  <h2>투자정보</h2>
  <hr>
  <p class="miv_txt01"><strong>인류건강과 행복실현</strong>이라는<br>
    변하지 않는 가치를 위해 원칙을 지킵니다.</p>

  <article class="miv_wrap">
    <h3>실시간 주가정보</h3>
    <div class="miv_box">
      <table>
      <tr>
        <th colspan="2">실시간 주가 정보 <span class="invest_today">00.00.00</span>
        <a href="#" title="주가정보 더보기">더보기 +</a></th>
      </tr>
      <tr>
        <td>&#9650;&#9660; 400,000</td>
        <td>전일대비<br>265,500</td>
      </tr>
      </table>
    </div>
    <div class="m_news">
    <h3>News</h3>
    <a href="#" title="한미소식 더보기">더보기 +</a>
    <hr>
    <ul>
      <li>
        <a href="#" title="뉴스1">
          <span>한미약품, 5년 연속 원외처방 1위</span>
          <span>02-03</span>
        </a>
      </li>

      <li>
        <a href="#" title="뉴스2">
          <span>JVM, 창사 이래 최대 연매출 1419억원 달성</span>
          <span>01-27</span>
        </a>
      </li>

      <li>
        <a href="#" title="뉴스3">
          <span>“아모잘탄패밀리·클로잘탄정·로수젯정, 심혈관질환 예방 통합관리에 효과적”</span>
          <span>01-19</span>
        </a>
      </li>

      <li>
        <a href="#" title="뉴스4">
          <span>“한미약품 로수젯, 심혈관 질환 있는 ‘당뇨병 환자’ LDL-C 관리에 탁월”</span>
          <span>01-17</span>
        </a>
      </li>

      <li>
        <a href="#" title="뉴스5">	
          <span>한미약품그룹 ‘새로운 50년, Global 한미!’ 기치로 새해 힘찬 출발</span>
          <span>01-02</span>
        </a>
      </li>

    </ul>

  </div>
  <div class="m_ir">
    <h3>IR</h3>
    <a href="#" title="IR 더보기">더보기 +</a>
    <hr>
    <ul>
      <li>
        <a href="#" title="IR">
          <span>2023년 1분기 기업설명회</span>
          <span>02-10</span>
        </a>
      </li>
      <li>
        <a href="#" title="IR">
          <span>2022년 4분기 실적발표</span>
          <span>02-08</span>
        </a>
      </li>
      <li>
        <a href="#" title="IR">
          <span>2022년 4분기 기업설명회</span>
          <span>11-03</span>
        </a>
      </li>
      <li>
        <a href="#" title="IR">
          <span>2022년 3분기 실적발표</span>
          <span>11-01</span>
        </a>
      </li>
      <li>
        <a href="#" title="IR">
          <span>2022년 2분기 실적발표</span>
          <span>07-19</span>
        </a>
      </li>
    </ul>
  </div>
</article>
<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->

</section>
</main>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>