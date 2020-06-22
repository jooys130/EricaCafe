<!DOCTYPE HTML>
<?php session_start() ?>
   <html>
   <head>
      <title>EricaCafe</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <link rel="stylesheet" href="assets/css/map.css" />
      <link rel="stylesheet" href="assets/css/search.css" />
      <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
   </head>
   <body class="is-loading">

   <!-- Wrapper -->
   <div id="wrapper" class="fade-in">

	<!-- Intro -->
		<div id="intro">
			
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<ul class="actions small">

					<!-- php -->
					<?php
					if($_SESSION['signUpOk'] == "yes"){
						$_SESSION['signUpOk'] = "no";
						echo "<script>alert('회원가입이 완료되었습니다.');</script>";
					}
				
					if(!isset($_SESSION['user_name'])){
						echo '<li><a href="login.html" class="button special small">LOGIN</a></li>';
						echo '<li><a href="signUp.php" class="button small">SIGN UP</a></li>';
					} 
					else{
						$user_name = $_SESSION['user_name'];
						$user_id = $_SESSION['user_id'];
						echo "<p><strong>$user_name</strong>님 환영합니다.";
						echo '<li><a href="logOut.php" class="button special small">LOGOUT</a></li>';
					}?>
		
				</ul>	
			</nav>
						  
			<h1>Cafe Finder<br/>
			around ERICA</h1>
			<p>학교 주변 카페 <b>위치</b>와 <b>정보</b> 간편하게 알아보기</p>
		</div>

      <!-- Header -->
      <header id="header">
		<a class="logo">CAFE FINDER</a>
      </header>

      <!-- Nav -->
      <nav id="nav">
         <ul class="links">
			<li class="active"><a href="cafe.php">Cafe</a></li>
			<li><a href="intro.html">Introduce</a></li>
         </ul>
      </nav>

      <!-- Main -->
      <div id="main">

         <!-- Post -->
         <section class="post">
            <header class="major">
               <h1>This is a<br />
                  Cafe Page</h1>
               <h3>around ERICA</h3>
               <p>성준은유연하조</p>
            </header>

          	<h3 style="margin-bottom: 0; color: gray;">Click on the marker for detail!</h3>
       		<div id="map"></div>
			<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=5f153b84f80fa945db9bdf11c9747b2d"></script>
			<script>
				var mapContainer = document.getElementById('map'), // 지도 표시 
			    mapOption = { 
			        center: new kakao.maps.LatLng(37.298574, 126.836560), // 지도의 중심좌표
			        level: 4
			        // center: new kakao.maps.LatLng(37.300701, 126.839197), // 지도의 중심좌표
			        // level: 2
			    };

				var map = new kakao.maps.Map(mapContainer, mapOption); // 지도 생성

				// map.setDraggable(false);
				// map.setZoomable(false);   

				// 지도 타입 전환 컨트롤 (일반 / 스카이뷰)
				var mapTypeControl = new kakao.maps.MapTypeControl();

				map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);

				// 마커 위치 
				var positions = [
				    {
				        content: '<div class="title">스타벅스</div>',
				        latlng: new kakao.maps.LatLng(37.300832, 126.838160)
				    },
				    {
				        content: '<div class="title">워터킹커피로스터스</div>',
				        latlng: new kakao.maps.LatLng(37.299379, 126.838482)
				    },
				    {
				        content: '<div class="title">토프레소</div>',
				        latlng: new kakao.maps.LatLng(37.299574, 126.838555)
				    },
				    {
				        content: '<div class="title">시저커피</div>',
				        latlng: new kakao.maps.LatLng(37.299794, 126.839081)
				    },
				    {
				        content: '<div class="title">아마스빈</div>',
				        latlng: new kakao.maps.LatLng(37.299523, 126.838432)
				    },
				    {
				        content: '<div class="title">카페윈드밀</div>',
				        latlng: new kakao.maps.LatLng(37.299819, 126.838274)
				    },
				    {
				        content: '<div class="title">모모커피</div>',
				        latlng: new kakao.maps.LatLng(37.299967, 126.838154)
				    },
				    {
				        content: '<div class="title">쥬씨</div>',
				        latlng: new kakao.maps.LatLng(37.300121, 126.838311)
				    },
				    {
				        content: '<div class="title">요거프레소</div>',
				        latlng: new kakao.maps.LatLng(37.300327, 126.838802)
				    },
				    {
				        content: '<div class="title">카페마루</div>',
				        latlng: new kakao.maps.LatLng(37.300309, 126.839184)
				    },
				    {
				        content: '<div class="title">이디야커피</div>',
				        latlng: new kakao.maps.LatLng(37.300919, 126.839055)
				    },
				    {
				        content: '<div class="title">카페누엘</div>',
				        latlng: new kakao.maps.LatLng(37.301370, 126.839369)
				    },
				    {
				        content: '<div class="title">커피플랜트</div>',
				        latlng: new kakao.maps.LatLng(37.301589, 126.839448)
				    },
				    {
				        content: '<div class="title">룽고커피</div>',
				        latlng: new kakao.maps.LatLng(37.301085, 126.840640)
				    },
				    {
				        content: '<div class="title">우리동네커피공장카페</div>',
				        latlng: new kakao.maps.LatLng(37.301501, 126.840436)
				    },
					{
				        content: '<div class="title">타르트블라썸</div>',
				        latlng: new kakao.maps.LatLng(37.302022, 126.839557)
				    },
				    {
				        content: '<div class="title">카페내향적</div>',
				        latlng: new kakao.maps.LatLng(37.301948, 126.840354)
				    },
				    {
				        content: '<div class="title">크레바스</div>',
				        latlng: new kakao.maps.LatLng(37.301897, 126.841342)
				    },
				    {
				        content: '<div class="title">투썸플레이스</div>',
				        latlng: new kakao.maps.LatLng(37.302922, 126.836267)
				    },
				    {
				        content: '<div class="title">카페카르와</div>',
				        latlng: new kakao.maps.LatLng(37.298260, 126.838715)
				    },
				    {
				        content: '<div class="title">카페드림</div>',
				        latlng: new kakao.maps.LatLng(37.298164, 126.834378)
				    }
				];

				// // 마커 이미지
				// // var imageSrc = "https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png"; 

				for (var i = 0; i < positions.length; i ++) {
				    // 마커를 생성
				    var marker = new kakao.maps.Marker({
				        map: map, // 마커를 표시할 지도
				        position: positions[i].latlng, // 마커의 위치
				        //image: markerImage, // 마커이미지 설정
				        clickable: true
				    });

				    // 마커에 표시할 인포윈도우를 생성
				    var infowindow = new kakao.maps.InfoWindow({
				        content: positions[i].content // 인포윈도우에 표시할 내용
				    });

				    // 마커에 클릭이벤트 등록
				    if(i==0){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_0.html";});
				    }else if(i==1){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_1.html";});
				    }else if(i==2){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_2.html";});
				    }else if(i==3){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_3.html";});
				    }else if(i==4){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_4.html";});
				    }else if(i==5){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_5.html";});
				    }else if(i==6){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_6.html";});
				  	}else if(i==7){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_7.html";});
				    }else if(i==8){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_8.html";});
				    }else if(i==9){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_9.html";});
				    }else if(i==10){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_10.html";});
				    }else if(i==11){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_11.html";});
				    }else if(i==12){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_12.html";});
				   	}else if(i==13){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_13.html";});
				    }else if(i==14){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_14.html";});
				    }else if(i==15){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_15.html";});
				    }else if(i==16){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_16.html";});
				    }else if(i==17){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_17.html";});
				    }else if(i==18){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_18.html";});
				  	}else if(i==19){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_19.html";});
				    }else if(i==20){
				        kakao.maps.event.addListener(marker, 'click', function() {
				            location.href="cafe_list/cafe_20.html";});
				    }
				    
				    // 마커에 mouseover 이벤트와 mouseout 이벤트를 등록
				    kakao.maps.event.addListener(marker, 'mouseover', makeOverListener(map, marker, infowindow));
				    kakao.maps.event.addListener(marker, 'mouseout', makeOutListener(infowindow));
				}

				// 인포윈도우 열기
				function makeOverListener(map, marker, infowindow) {
				    return function() {
				        infowindow.open(map, marker);
				    };
				}

				// 인포윈도우 닫기
				function makeOutListener(infowindow) {
				    return function() {
				        infowindow.close();
				    };
				}

				 
			</script>

			<script type="text/javascript">
		      	function filter(){

			        var value, name, item, i;

			        value = document.getElementById("value").value.toUpperCase();
			        item = document.getElementsByClassName("item");

			        for(i=0;i<item.length;i++){
			        	name = item[i].getElementsByClassName("name");
			     		if(name[0].innerHTML.toUpperCase().indexOf(value) > -1) {
			            	item[i].style.display = "flex";
			          	} else {
			            	item[i].style.display = "none";
			          	}
			        }
		      	}
		  	</script>


			<div class="searchbox">
		    	<div class="header">
		        <h1>Search</h1>
		        <input onkeyup="filter()" type="text" id="value" placeholder="Type to Search">
		   		</div>

		   		<div class="container">

		   			<a href="cafe_list/cafe_4.html">
					   	<div class="item">
					      	<span class="icon">A</span>
					      	<span class="name">아마스빈</span>
					    </div>
					</a>

					<a href="cafe_list/cafe_19.html">
					   	<div class="item">
					      	<span class="icon">C</span>
					      	<span class="name">카페카르와</span>
					    </div>
				    </a>

				    <a href="cafe_list/cafe_17.html">
					  	<div class="item">
					   		<span class="icon">C</span>
					     	<span class="name">크레바스</span>
					    </div>
				    </a>

				    <a href="cafe_list/cafe_20.html">
					   	<div class="item">
					      	<span class="icon">D</span>
					      	<span class="name">카페드림</span>
					    </div>
				    </a>

				    <a href="cafe_list/cafe_10.html">
					   	<div class="item">
					      	<span class="icon">E</span>
					      	<span class="name">이디야커피</span>
					    </div>
				    </a>

				    <a href="cafe_list/cafe_12.html">
					    <div class="item">
					      	<span class="icon">F</span>
					      	<span class="name">커피플랜트</span>
					    </div>
				    </a>

				    <a href="cafe_list/cafe_7.html">
					   	<div class="item">
					      	<span class="icon">J</span>
					      	<span class="name">쥬씨</span>
					    </div>
				    </a>

				    <a href="cafe_list/cafe_13.html">
					   	<div class="item">
					      	<span class="icon">L</span>
					      	<span class="name">룽고커피</span>
					    </div>
				    </a>

				    <a href="cafe_list/cafe_9.html">
					   	<div class="item">
					      	<span class="icon">M</span>
					      	<span class="name">카페마루</span>
					    </div>
				    </a>

				    <a href="cafe_list/cafe_6.html">
					   	<div class="item">
					      	<span class="icon">M</span>
					      	<span class="name">모모커피</span>
					    </div>
				    </a>

				    <a href="cafe_list/cafe_16.html">
					   	<div class="item">
					      	<span class="icon">N</span>
					      	<span class="name">카페내향적</span>
					    </div>
				   	</a>

				    <a href="cafe_list/cafe_11.html">
					   	<div class="item">
					      	<span class="icon">N</span>
					      	<span class="name">카페누엘</span>
					    </div>
				    </a>

				    <a href="cafe_list/cafe_0.html">
					   	<div class="item">
					      	<span class="icon">S</span>
					      	<span class="name">스타벅스</span>
					    </div>
				    </a>

				    <a href="cafe_list/cafe_3.html">
					   	<div class="item">
					      	<span class="icon">S</span>
					      	<span class="name">시저커피</span>
					    </div>
					</a>

				    <a href="cafe_list/cafe_15.html">
					    <div class="item">
						    <span class="icon">T</span>
						    <span class="name">타르트블라썸</span>
					    </div>
					</a>

					<a href="cafe_list/cafe_2.html">
					    <div class="item">
					      	<span class="icon">T</span>
					      	<span class="name">토프레소</span>
					    </div>
					</a>

					<a href="cafe_list/cafe_18.html">
					    <div class="item">
					      	<span class="icon">T</span>
					      	<span class="name">투썸플레이스</span>
					    </div>
					</a>

					<a href="cafe_list/cafe_14.html">
					   	<div class="item">
					      	<span class="icon">U</span>
					      	<span class="name">우리동네커피공장카페</span>
					    </div>
					</a>

					<a href="cafe_list/cafe_1.html">
					   	<div class="item">
					      	<span class="icon">W</span>
					      	<span class="name">워터킹커피로스터스</span>
					    </div>
					</a>

					<a href="cafe_list/cafe_5.html">
					   	<div class="item">
					      	<span class="icon">W</span>
					      	<span class="name">카페윈드밀</span>
					    </div>
					</a>

					<a href="cafe_list/cafe_8.html">
					   	<div class="item">
					      	<span class="icon">Y</span>
					      	<span class="name">요거프레소</span>
					    </div>
					</a>
			  	</div>
		    </div>


         </section>
      </div>

      <!-- Footer -->
      <footer id="footer">
         <section>
            <form method="post" action="#">
               <div class="field">
                  <label for="name">Reference:</label>
                  <p>http://webjangi.com/design/freetemplate#cbp=/design/info_ft/30</p>
               </div>
            </form>
         </section>
      </footer>

      <!-- Copyright -->
      <div id="copyright">
         <ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
      </div>

   </div>

   <!-- Scripts -->
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/jquery.scrollex.min.js"></script>
   <script src="assets/js/jquery.scrolly.min.js"></script>
   <script src="assets/js/skel.min.js"></script>
   <script src="assets/js/util.js"></script>
   <script src="assets/js/main.js"></script>

   </body>
</html>