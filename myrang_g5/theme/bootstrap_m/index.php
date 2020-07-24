<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

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
          <h3 class="son2">소개글</h3>
          <p><strong>안녕하십니까.여수 바다낚시의 베테랑 명랑피싱 입니다.여수에서 30년간 낚시어선업에 종사하며 갯바위 낚시, 갈치 낚시, 생활낚시까지 풍부한 경험을 바탕으로 좋은 조황과 안전한 향해로 조사님들께서 만족 할 수 있도록 최선을 다하는 모습을 보이도록 노력하겠습니다.</strong>
					<br><strong><i><div id="son_name" style="font-size:22px; text-align:right;"> – 선장 손철석</div></i></strong></p>
        </header>
      </div>
    </section><!-- #about -->

<!----------------------------------------------------------------------------->
<section id="about2">
      <div class="container">

						<header class="section-header second_1">
							<div class="son1">선박시설</div>
						</header>
													<div class="row about-container">
																		
														</div>
														<div id="gallery_layout">
																										<div class="gallery_content">
																													<img src="theme/bootstrap_m/img/road.jpeg" alt="travel_img">
																															<div class="content">
																																	<h1>복도</h1>
																																	<p>예상외로 넓어서 사람들과 부딪히지 않습니다.</p>
																															</div>
																													<div class="overlay darkBlue"></div>
																										</div>
																										<div class="gallery_content top">
																													<img src="theme/bootstrap_m/img/front_board2.jpeg" alt="여행이미지2">
																															<div class="content">
																																	<h1>갑판</h1>
																																	<p>어창 및 용품함이 튀어나와있지않아 편하게 앉으실 수 있습니다.</p>
																															</div>
																													<div class="overlay red"></div>
																										</div>
																										<div class="gallery_content">
																												<img src="theme/bootstrap_m/img/front_board.jpeg" alt="여행이미지3">
																															<div class="content">
																																	<h1>갑판</h1>
																																	<p>도마가 구비되어 쉽게 채비를 할 수 있습니다.</p>
																															</div>
																												<div class="overlay pink"></div>
																										</div>
																										<div class="gallery_content">
																												<img src="theme/bootstrap_m/img/room2.jpeg" alt="여행이미지4">
																															<div class="content">
																																	<h1>후방 내실</h1>
																																	<p>넓고 쾌적하며 에어컨이 준비되어 있습니다.</p>
																															</div>
																												<div class="overlay black"></div>
																										</div>
																										<div class="gallery_content">
																												<img src="theme/bootstrap_m/img/back_board.jpeg" alt="여행이미지5">
																															<div class="content">
																																	<h1>후방갑판</h1>
																																	<p>넓게 트여있으며 최대한 자리를 확보 할 수 있게 구성되어 있습니다.</p>
																															</div>
																												<div class="overlay yellow"></div>
																										</div>
																										<div class="gallery_content">
																											<img src="theme/bootstrap_m/img/toliet.jpeg" alt="여행이미지6">
																															<div class="content">
																																	<h1>화장실</h1>
																																	<p>상당히 넓으며 배의 중심에 있어서 양옆 복도의 자유로운 이동이 가능합니다.</p>
																															</div>
																										<div class="overlay gold"></div>
																			</div>

  	</div>
</section>
<?php
}

include_once(G5_THEME_PATH.'/tail.php');
?>