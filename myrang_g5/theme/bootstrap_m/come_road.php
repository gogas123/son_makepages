<?php

include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
if(is_file(G5_PATH.'/main.php'))
{
	include G5_PATH.'/main.php';
}else{

?>

<!----------------------------------------------------------------------------->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3 class="son2">오시는 길</h3>
          <p>네비게이션 주소: <strong><i>전남 여수시 어항단지로 18-10</i></strong><br>승진수중 건물 앞에 정박되어 있습니다.주차공간이 있으며 이중주차는 하루에 두번씩 단속이 나옵니다.출항 시간보다 일찍 오시는 것을 추천드립니다.
        </header>
      </div>
    </section><!-- #about -->

<!----------------------------------------------------------------------------->
<section id="about2">
      <div class="container">
						<header class="section-header second_1">
							<div class="son1">상세지도</div>
						</header>
												<div class="row about-container"> 
													<!DOCTYPE html>
														<body>
																<div id="map" style="margin:0 auto; width:80%;height:350px;"></div>
																<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=	e11ebc49221e46ea59a47c98c00730cc"></script>
																	<script>
																		var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
																					mapOption = {
																						center: new kakao.maps.LatLng(34.724248, 127.711554), // 지도의 중심좌표
																						level: 3 // 지도의 확대 레벨
																					};

																		var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

																				// 지도를 표시하는 div 크기를 변경하는 함수입니다
																				function resizeMap() {
																					var mapContainer = document.getElementById('map');
																					mapContainer.style.width = '650px';
																					mapContainer.style.height = '650px';
																				}

																				function relayout() {

																					// 지도를 표시하는 div 크기를 변경한 이후 지도가 정상적으로 표출되지 않을 수도 있습니다
																					// 크기를 변경한 이후에는 반드시  map.relayout 함수를 호출해야 합니다 
																					// window의 resize 이벤트에 의한 크기변경은 map.relayout 함수가 자동으로 호출됩니다
																					map.relayout();
																				}
																		var markerPosition  = new kakao.maps.LatLng(34.724248, 127.711554); 
																		var marker = new kakao.maps.Marker({
																			position: markerPosition
																		});
																		marker.setMap(map);
																	</script>
														</body>
													</html>
													
												</div>	
						          			<!--지도 끝!!!!!!  -->
											  <div style="height:86px;" aria-hidden="true" class="wp-block-spacer"></div>
											<div style=" margin:0 auto; width:80%; ">
												<div style="width:650px; height:650px;"> <img src="/g5/theme/bootstrap_m/img/mosa0DBWQc-768x559.png"></div>
												<div style="width:650px; height:650px;"> <img src="/g5/theme/bootstrap_m/img/mosa0DBWQc-768x559.png"></div>
												<div style="width:650px; height:650px;"> <img src="/g5/theme/bootstrap_m/img/mosa0DBWQc-768x559.png"></div>
											</div>
												
		</div>
</section>



<?php
}

include_once(G5_THEME_PATH.'/tail.php');
?>