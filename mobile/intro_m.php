<?php
  include_once($_SERVER['DOCUMENT_ROOT'].'/mobile/m_header.php');
?>

<main>
    <section id="intro_sec01">
      <div class="bg-video">
        <video src="./images/Formation_Of_Clouds.mp4" class="bg-video_content" autoplay muted loop></video>
      </div>
      <div class="sec01_txt">
        <h2>기업</h2>
        <h3>한미소개</h3>
        <p>한미약품은 창조와 도전의 가치로 신약개발에 매진하는 R&D중심 제약기업입니다.</p>
      </div>
    </section>



    <section id="intro_sec02">
      <div class="sec02_box">
        <h2>ceo message</h2>
        <blockquote class="ceo_ms">
          <h3>대표이사 인사말</h3>
          <p>'고귀한 생명을 위하여 더 좋은 약을 만든다.'</p>
          <p>한미약품은 위와 같은 회사 철학을 바탕으로 글러벌 신약 창출에<br>매진하는 한국의 대표적인 R&D 중심 제약기업입니다.</p>
          <p>글로벌 제약기업으로 발전해 나가는 한미약품과 늘 함께 해 주시길 부탁드립니다.</p>
        </blockquote>
        <img src="./images/ceo_sign.png" alt="대표">
      </div>
    </section>


    <section id="intro_sec03">
      <div class="sec03_box">
        <div class="info_img">
          <img src="./images/info_img.jpg" alt="한미소개 이미지">
        </div>

        <div class="info_txt">
          <h2>information</h2>
          <h3>한미소개</h3>
          <p>
            <span>한미약품</span>
            은 제약산업의 생명인 R&D 투자에 대한 강력한 의지를
            바탕으로 효율적이고 전략적인 연구개발 모델을 도출해내는 일에
            한미약품의 미래를 걸 계획입니다.
          </p>
          <p>
            회사의 모든 역략을 R&D에 집중함으로써 신약 파이프라인을
            최대한 확보헤 세계 무대에서 통하는 글로벌 신약의 탄생 가능성을
            높여 나가겠습니다.
          </p>
          <a href="#none" title="더보기" class="m_btn">더보기</a>
        </div>
      </div>
    </section>


    <section id="intro_sec04">
      <div class="sec04_box">
        <div class="esg_txt">
          <h2>esg</h2>
          <h3>지속가능경영연구</h3>
          <p>
            <span>한미약품</span>
            의 제 1의사명은 모든 사람들의 생명과 건강을 지키고
            삶의 질을 향상시키기 위해 새로운 가치를 끊임없이 창조해내는 것입니다.
          </p>
          <p>
            한미약품은 2년 연속 KCGS ESG평가에서 A등급 획득은 물론
            대한민국 지속가능성지수 제약부분 1위에 선정되는 등 국내 제약산업에서
            최고 수준의 ESG경영을 실천하고 있습니다.
          </p>
          <a href="#none" class="m_btn">더보기</a>
        </div>
        <div class="esg_img">
          <img src="./images/esg_img.jpg" alt="esg 이미지">
        </div>
      </div>
    </section>
    


    <section id="intro_sec05">
      <h2>오시는 길</h2>
      <p class="sec05_p">한미약품 사업장 위치를 알려드립니다.</p>
      <div class="tab_map">
        <ul>
          <li class="act">
            <a href="#none" title="한미약품" class="act2">한미약품</a>
            <div class="con c01">
              <!-- * 카카오맵 - 지도퍼가기 -->
              <!-- 1. 지도 노드 -->
              <div id="daumRoughmapContainer1678079669424" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%; height: 100%;"></div>

              <!--
                2. 설치 스크립트
                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
              -->
              <script class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

              <!-- 3. 실행 스크립트 -->
              <script>
                new daum.roughmap.Lander({
                  "timestamp" : "1678079669424",
                  "key" : "2dxmm",
                  // "mapWidth" : "640",
                  "mapHeight" : "400"
                }).render();
              </script>
              <div class="con_sub">
                <p>
                  <img src="./images/map_ic.png" alt="맵아이콘">
                  서울 송파구 위례성대로 14
                </p>
                <div class="con_sub_num">
                  <p>
                    <img src="./images/tel_ic.png" alt="전화번호">
                  </p>
                  <p class="tf">
                    <b>TEL</b>
                    <br>
                    02-410-9114
                  </p>
                  <p>
                    <img src="./images/tel_ic2.png" alt="전화번호">
                  </p>
                  <p class="tf">
                    <b>FAX</b>
                    <br>
                    02-3459-9600
                  </p>
                </div>
              </div>
              <hr>
              <div class="con_sub_bus">
                <div class="bus">
                  <img src="./images/tel_ic3.png" alt="버스">
                  <p>
                    <b>버스</b>
                    <br>
                    몽총토성역. 한성백제역 정류장 하차
                  </p>
                </div>
                <br>
                <div class="metro">
                  <img src="./images/tel_ic4.png" alt="버스">
                  <p>
                    <b>지하철</b>
                    <br>
                    몽총토성역 2번출구 하차 도보 3분
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li>
            <a href="#none" title="연구센터">연구센터</a>
            <div class="con c02">
              <!-- * 카카오맵 - 지도퍼가기 -->
              <!-- 1. 지도 노드 -->
              <div id="daumRoughmapContainer1678080037320" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%; height: 100%;"></div>

              <!--
                2. 설치 스크립트
                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
              -->
              <script class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

              <!-- 3. 실행 스크립트 -->
              <script>
                new daum.roughmap.Lander({
                  "timestamp" : "1678080037320",
                  "key" : "2dxmt",
                  // "mapWidth" : "640",
                  "mapHeight" : "400"
                }).render();
              </script>
              <div class="con_sub">
                <p>
                  <img src="./images/map_ic.png" alt="맵아이콘">
                  경기 화성시 동탄기흥로 550
                </p>
                <div class="con_sub_num">
                  <p>
                    <img src="./images/tel_ic.png" alt="전화번호">
                  </p>
                  <p class="tf">
                    <b>TEL</b>
                    <br>
                    031-8053-1000
                  </p>
                  <p>
                    <img src="./images/tel_ic2.png" alt="전화번호">
                  </p>
                  <p class="tf">
                    <b>FAX</b>
                    <br>
                    02-3459-9600
                  </p>
                </div>
              </div>
              <hr>
              <div class="con_sub_bus">
                <div class="bus">
                  <img src="./images/tel_ic3.png" alt="버스">
                  <p>
                    <b>버스</b>
                    <br>
                    몽총토성역. 한성백제역 정류장 하차
                  </p>
                </div>
                <br>
                <div class="metro">
                  <img src="./images/tel_ic4.png" alt="버스">
                  <p>
                    <b>지하철</b>
                    <br>
                    몽총토성역 2번출구 하차 도보 3분
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li>
            <a href="#none" title="팔탄공단">팔탄공단</a>
            <div class="con c03">
              <!-- * 카카오맵 - 지도퍼가기 -->
              <!-- 1. 지도 노드 -->
              <div id="daumRoughmapContainer1678080428632" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%; height: 100%;"></div>

              <!--
                2. 설치 스크립트
                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
              -->
              <script class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

              <!-- 3. 실행 스크립트 -->
              <script>
                new daum.roughmap.Lander({
                  "timestamp" : "1678080428632",
                  "key" : "2dxn5",
                  // "mapWidth" : "640",
                  "mapHeight" : "400"
                }).render();
              </script>
              <div class="con_sub">
                <p>
                  <img src="./images/map_ic.png" alt="맵아이콘">
                  경기 화성시 팔탄면 무하로 214
                </p>
                <div class="con_sub_num">
                  <p>
                    <img src="./images/tel_ic.png" alt="전화번호">
                  </p>
                  <p class="tf">
                    <b>TEL</b>
                    <br>
                    031-350-5600
                  </p>
                  <p>
                    <img src="./images/tel_ic2.png" alt="전화번호">
                  </p>
                  <p class="tf">
                    <b>FAX</b>
                    <br>
                    02-3459-9600
                  </p>
                </div>
              </div>
              <hr>
              <div class="con_sub_bus">
                <div class="bus">
                  <img src="./images/tel_ic3.png" alt="버스">
                  <p>
                    <b>버스</b>
                    <br>
                    몽총토성역. 한성백제역 정류장 하차
                  </p>
                </div>
                <br>
                <div class="metro">
                  <img src="./images/tel_ic4.png" alt="버스">
                  <p>
                    <b>지하철</b>
                    <br>
                    몽총토성역 2번출구 하차 도보 3분
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li>
            <a href="#none" title="평택공단">평택공단</a>
            <div class="con c04">
              <!-- * 카카오맵 - 지도퍼가기 -->
              <!-- 1. 지도 노드 -->
              <div id="daumRoughmapContainer1678080499112" class="root_daum_roughmap root_daum_roughmap_landing"
              style="width:100%; height: 100%;"></div>

              <!--
                2. 설치 스크립트
                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
              -->
              <script class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

              <!-- 3. 실행 스크립트 -->
              <script>
                new daum.roughmap.Lander({
                  "timestamp" : "1678080499112",
                  "key" : "2dxn8",
                  // "mapWidth" : "640",
                  "mapHeight" : "400"
                }).render();
              </script>
              <div class="con_sub">
                <p>
                  <img src="./images/map_ic.png" alt="맵아이콘">
                  경기 평택시 팽성읍 추팔산단로 114
                </p>
                <div class="con_sub_num">
                  <p>
                    <img src="./images/tel_ic.png" alt="전화번호">
                  </p>
                  <p class="tf">
                    <b>TEL</b>
                    <br>
                    031-8053-1000
                  </p>
                  <p>
                    <img src="./images/tel_ic2.png" alt="전화번호">
                  </p>
                  <p class="tf">
                    <b>FAX</b>
                    <br>
                    02-3459-9600
                  </p>
                </div>
              </div>
              <hr>
              <div class="con_sub_bus">
                <div class="bus">
                  <img src="./images/tel_ic3.png" alt="버스">
                  <p>
                    <b>버스</b>
                    <br>
                    몽총토성역. 한성백제역 정류장 하차
                  </p>
                </div>
                <br>
                <div class="metro">
                  <img src="./images/tel_ic4.png" alt="버스">
                  <p>
                    <b>지하철</b>
                    <br>
                    몽총토성역 2번출구 하차 도보 3분
                  </p>
                </div>
              </div>
            </div>
            <div></div>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <?php include_once($_SERVER['DOCUMENT_ROOT'].'/mobile/footer_m.php'); ?>