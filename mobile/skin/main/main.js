$(function(){
  // 약국찾기 모달 (제이쿼리)
  let modal = `
    <div class="m_modal">
      <div class="m_map">
        <a href="#" title="닫기" class="m_close">
          <span></span>
          <span></span>
        </a>
        <h3>판매 약국 검색</h3>
        <hr>
        <form name="m_search" method="post" action="">
        <div class="modal_search">
          <label for="p_search">제품명 검색</label>
          <input type="search" name="p_search" id="p_search" placeholder="제품명을 입력하세요">
          <i class="fas fa-magnifying-glass"></i>
        </div>
        <div class="modal_area">
          <label for="map_name">지역명 검색</label>
          <div class="modal_wrap">
            <select name="map_name" id="map_name">
              <option>시,도 검색</option>
              <option>강원도</option>
            </select>
            <select>
              <option>시,군,구 검색</option>  
            </select>
            <input type="submit" value="약국검색">
          </div>
          <i class="fas fa-magnifying-glass"></i>
          <div id="daumRoughmapContainer1678675643784" 
          class="root_daum_roughmap root_daum_roughmap_landing"></div>
 
          <p>※ 판매 약국 검색은 일반의약품, 건강기능식품, 의약외품만 가능합니다.</p>
        </form>
      </div>
    </div>
    <script charset="UTF-8">
    new daum.roughmap.Lander({
      "timestamp" : "1678675643784",
      "key" : "2e2gi",
      "mapWidth" : "100%",
      "mapHeight" : "300"
    }).render();
  </script>`;

  $('body').append(modal);

    $('.ms_search > li:last-child').click(function(e){
      e.preventDefault();
      $('.m_modal').css({'opacity':'1', 'visibility':'visible','z-index':'1000'});
      $('.m_close').click(function(){
        e.preventDefault();
      $('.m_modal').removeAttr('style');
    });

    });
    

      
    $('.ms_side > ul > li:nth-of-type(2)').click(function(e){
      e.preventDefault();
      $('.m_modal').css({'opacity':'1', 'visibility':'visible','z-index':'1000'});
      $('.m_close').click(function(){
        $('.m_modal').removeAttr('style');
      });
    });

    // 2sec 제품소개페이지
    
    var m_product_slider = new Swiper(".m_product_slider", {
      grabCursor: true,
      effect: "creative",
      speed : 500,
      pagination: {
        el: ".p_page",
        type: "fraction",
        formatFractionCurrent: function (number) {
            return ('0' + number).slice(-2);
        },
        formatFractionTotal: function (number) {
            return ('0' + number).slice(-2);
        },
        renderFraction: function (currentClass, totalClass) {
            return '<span class="' + currentClass + '"></span>' + '/' + '<span class="' + totalClass + '"></span>';
        }
      },
      creativeEffect: {
        prev: {
          translate: ["-10%", 0, -1],
          opacity: 0
        },
        next: {
          translate: ["100%", 0, 0],
          opacity: 1
        },
      },
      navigation: {
        prevEl: ".p_lbtn",
        nextEl: ".p_rbtn",
      },
    });

    // 1sec 메인슬라이드
    let n =  0;
    console.log(n);

    // 기본값
  $('.ms_box > li > div').css('opacity','1');
  $('.ms_box > li:first-of-type > div').addClass('ms_fadein');
    move_a();

  $('.ms_btn > span').click(function(){
    n = $(this).index();
    console.log(n);

    // 슬라이드 이미지 너비 구함
    let img_w = $('.ms_box > li').width()*n;
    console.log(img_w);

    // 슬라이드 이미지 이동
    $('.ms_box > li').animate({'left':-img_w},500);

    // 슬라이드 버튼 이동
    $('.ms_btn > span').removeClass('ms_on');
    $(this).addClass('ms_on');

    // 슬라이드 버튼 클릭시 글자 나타남
    if(n==0){
      $('.ms_box > li > div').css('opacity','0');
      $('.ms_box > li:first-of-type > div').addClass('ms_fadein').parent().siblings().find('div').removeClass('ms_fadein');
      return_a();
      move_a();
    }else if(n==1){
      $('.ms_box > li > div').css('opacity','0');
      $('.ms_box > li:nth-of-type(2) > div').addClass('ms_fadein').parent().siblings().find('div').removeClass('ms_fadein');
      return_a();
      move_a();
  
    }else{
      $('.ms_box > li > div').css('opacity','0');
      $('.ms_box > li:last-of-type > div').addClass('ms_fadein').parent().siblings().find('div').removeClass('ms_fadein');
      return_a();
      move_a();
    }
  });

  function move_a(){
    $('.ms_arrow').animate({'left':$('.ms_box > li').width() - $('.ms_arrow').width() + 'px'},5000);
  }
  function return_a(){
    $('.ms_arrow').stop().css('left','0px');
  }

  // 3초마다 반복호출하여 슬라이드가 자동으로 움직이게 한다.
  function autoslide(n){
    w = -(n*$('.ms_box > li').width());
    $('.ms_box > li').animate({'left':w},500);

    // li.length에 따라 글자와 버튼 이동
    if(n==0){
      $('.ms_box > li > div').css('opacity','0');
      $('.ms_box > li:first-of-type > div').addClass('ms_fadein').parent().siblings().find('div').removeClass('ms_fadein');
      $('.ms_btn > span').siblings().removeClass('ms_on');
      $('.ms_btn > span:first-of-type').addClass('ms_on');
      return_a();
      move_a();
      
    }else if(n==1){
      $('.ms_box > li > div').css('opacity','0');
      $('.ms_box > li:nth-of-type(2) > div').addClass('ms_fadein').parent().siblings().find('div').removeClass('ms_fadein');
      $('.ms_btn > span').siblings().removeClass('ms_on');
      $('.ms_btn > span:nth-of-type(2)').addClass('ms_on');
      return_a();
      move_a();
      
    }else{
      $('.ms_box > li > div').css('opacity','0');
      $('.ms_box > li:last-of-type > div').addClass('ms_fadein').parent().siblings().find('div').removeClass('ms_fadein');
      $('.ms_btn > span').siblings().removeClass('ms_on');
      $('.ms_btn > span:last-of-type').addClass('ms_on');
      return_a();
      move_a();
    }
  }

  let Timer = setInterval(function(){
    if(n==2){
      n=0;
    }else{
      n++;
    }
    autoslide(n);
  },5000);

  $('.ms_btn > span').hover(function(){
    clearInterval(Timer);
    return_a();
  },function(){
    Timer = setInterval(function(){
      if(n==2){
        n=0;
      }else{
        n++;
      }
      autoslide(n);
    },5000);
    move_a();
    });

    let ms_i = $('i.fa-pause');
    $('i.fa-pause').click(function(){
  
      if(ms_i!==0){
        clearInterval(Timer);
        return_a();
        $(this).removeClass('fa-pause');
        $(this).addClass('fa-play');
        ms_i = 0; 
      }else{      
        $(this).removeClass('fa-play');
        $(this).addClass('fa-pause');
        Timer = setInterval(function(){
          if(n==2){
            n=0;
          }else{
            n++;
          }
          autoslide(n);
        },5000);
        move_a();
        ms_i=1;
      }
      console.log(ms_i);
    });

          //////////스크롤 위치에 맞춰 등장이벤트//////////
  $(window).scroll(function(){
    let spos01 = $(this).scrollTop();
    console.log(spos01);
    if(spos01 >= 1250){
      $('.m_color01').addClass('active');
    }
    if(spos01 >= 2100){
      $('.m_color02').addClass('active');
    }
  });



  // 3sec 한미소개 카운트

  let onoff = false; // 실행 여부 확인 변수

  $(window).scroll(function(){

    let spos02 = $(this).scrollTop();

    if(spos02>=900&&spos02<=2000&&onoff==false){
      onoff = true;
      // 카운트를 표시할 요소
      const $counter = document.querySelector(".count1");

      // 목표수치
      const max = 50;

      counter($counter, max);

      function counter($counter, max) {
        let now = max;

        const handle = setInterval(() => {
          $counter.innerHTML = Math.ceil(max - now);
        
          // 목표에 도달하면 정지
          if (now < 1) {
            clearInterval(handle);
          }
        
          // 적용될 수치, 점점 줄어듬
          const step = now / 10;

          now -= step;
        }, 50);
      }

      const maxArr = [50, 1, 1000, 251];

      for(let i = 0; i < maxArr.length; i++) {
        if(i == 1){
          setTimeout(() => counter(document.querySelector('.count'+(i+1)), maxArr[i]), 3000);
        } else {
          counter(document.querySelector('.count'+(i+1)), maxArr[i]);
        }
      }

    }
  });
  

  let isinCd = 'KR7128940004'; // 한미약품 국제증권식별코드
  let serviceKeyStr = "9HZQmtjIkur6iyfPIGo7geVL7zZg%2F4G0sYllDJZH8zTueXqSUtz2Doyj%2BNEAB7Czqo8%2BFub9NIku30J2zVMxFQ%3D%3D"; // api 서비스키

  LoadData("http://api.odcloud.kr/api/GetStockSecuritiesInfoService/v1/getStockPriceInfo?resultType=json&isinCd=" + isinCd + "&serviceKey=" + serviceKeyStr);

  function LoadData(url) {
    $.ajax({
        dataType: "json",
        url: url,
        success: function(data) {
          stockData = data;
          stockIndex = 0;
          ParseJSON2(stockData, stockIndex);
        }
    });
  }


  function ParseJSON2(data, id) {
    const obj = data;
    item = obj.response.body.items.item[id];
    const basDt = new Date(item.basDt.replace(/(\d{4})(\d{2})(\d{2})/, '$1-$2-$3'));
    const year = basDt.getFullYear();
    const month = basDt.getMonth() + 1;
    const date = basDt.getDate();

    $('.invest_today').html(`( ${year}-${month >= 10 ? month : '0' + month}-${date >= 10 ? date : '0' + date} )`);
    $('.miv_box > table tr td:first-of-type').html(new Intl.NumberFormat().format(item.clpr));
    if(item.vs.charAt(0) === '-'){
      $('.miv_box > table tr td:first-of-type').html('&#9660; '+new Intl.NumberFormat().format(item.clpr));
      $('.miv_box > table tr td:first-of-type').addClass('down');
    } else {
      $('.miv_box > table tr td:first-of-type').html('&#9650; '+new Intl.NumberFormat().format(item.clpr));
    }
    $('.miv_box > table tr td:last-of-type').html('전일대비<br>'+new Intl.NumberFormat().format(item.vs)+'<br>('+item.fltRt+'%)');
  }

  
  var area0 = ["시/도 선택","서울특별시","인천광역시","대전광역시","광주광역시","대구광역시","울산광역시","부산광역시","경기도","강원도","충청북도","충청남도","전라북도","전라남도","경상북도","경상남도","제주도"];
  var area1 = ["강남구","강동구","강북구","강서구","관악구","광진구","구로구","금천구","노원구","도봉구","동대문구","동작구","마포구","서대문구","서초구","성동구","성북구","송파구","양천구","영등포구","용산구","은평구","종로구","중구","중랑구"];
  var area2 = ["계양구","남구","남동구","동구","부평구","서구","연수구","중구","강화군","옹진군"];
  var area3 = ["대덕구","동구","서구","유성구","중구"];
  var area4 = ["광산구","남구","동구",     "북구","서구"];
  var area5 = ["남구","달서구","동구","북구","서구","수성구","중구","달성군"];
  var area6 = ["남구","동구","북구","중구","울주군"];
  var area7 = ["강서구","금정구","남구","동구","동래구","부산진구","북구","사상구","사하구","서구","수영구","연제구","영도구","중구","해운대구","기장군"];
  var area8 = ["고양시","과천시","광명시","광주시","구리시","군포시","김포시","남양주시","동두천시","부천시","성남시","수원시","시흥시","안산시","안성시","안양시","양주시","오산시","용인시","의왕시","의정부시","이천시","파주시","평택시","포천시","하남시","화성시","가평군","양평군","여주군","연천군"];
  var area9 = ["강릉시","동해시","삼척시","속초시","원주시","춘천시","태백시","고성군","양구군","양양군","영월군","인제군","정선군","철원군","평창군","홍천군","화천군","횡성군"];
  var area10 = ["제천시","청주시","충주시","괴산군","단양군","보은군","영동군","옥천군","음성군","증평군","진천군","청원군"];
  var area11 = ["계룡시","공주시","논산시","보령시","서산시","아산시","천안시","금산군","당진군","부여군","서천군","연기군","예산군","청양군","태안군","홍성군"];
  var area12 = ["군산시","김제시","남원시","익산시","전주시","정읍시","고창군","무주군","부안군","순창군","완주군","임실군","장수군","진안군"];
  var area13 = ["광양시","나주시","목포시","순천시","여수시","강진군","고흥군","곡성군","구례군","담양군","무안군","보성군","신안군","영광군","영암군","완도군","장성군","장흥군","진도군","함평군","해남군","화순군"];
  var area14 = ["경산시","경주시","구미시","김천시","문경시","상주시","안동시","영주시","영천시","포항시","고령군","군위군","봉화군","성주군","영덕군","영양군","예천군","울릉군","울진군","의성군","청도군","청송군","칠곡군"];
  var area15 = ["거제시","김해시","마산시","밀양시","사천시","양산시","진주시","진해시","창원시","통영시","거창군","고성군","남해군","산청군","의령군","창녕군","하동군","함안군","함양군","합천군"];
  var area16 = ["서귀포시","제주시","남제주군","북제주군"];



  // 시/도 선택 박스 초기화

  $("select[name^=map_name]").each(function() {
    $selsido = $(this);
    $.each(eval(area0), function() {
    $selsido.append("<option value='"+this+"'>"+this+"</option>");
    });
    $selsido.next().append("<option value=''>구/군 선택</option>");
  });

  

  // 시/도 선택시 구/군 설정

  $("select[name^=map_name]").change(function() {
   var area = "area"+$("option",$(this)).index($("option:selected",$(this))); // 선택지역의 구군 Array
   var $gugun = $(this).next(); // 선택영역 군구 객체
   $("option",$gugun).remove(); // 구군 초기화

    if(area == "area0")
    $gugun.append("<option value=''>구/군 선택</option>");
    else {
    $.each(eval(area), function() {
      $gugun.append("<option value='"+this+"'>"+this+"</option>");
    });
    }
  });





  });

