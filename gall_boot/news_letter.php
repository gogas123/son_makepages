
<?php
include_once('./core/core_news.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Aside - Free HTML5 Bootstrap 4 Template by uicookies.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free HTML5 Website Template by uicookies.com" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="uicookies.com" />
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="./core/core2.js"> </script>
		<script src="./core/core_news.php"></script>

  </head>
  <body>
    
    <aside class="probootstrap-aside js-probootstrap-aside">
      <a href="#" class="probootstrap-close-menu js-probootstrap-close-menu d-md-none"><span class="oi oi-arrow-left"></span> Close</a>
			<div class="probootstrap-site-logo probootstrap-animate" data-animsate-effect="fadeInLeft">
				<a href="index.html" class="mb-2 d-block probootstrap-logo">NorthKorea Peple's Life</a>
				<p class="mb-0">The North Koreans GalleryBorder</p>
			</div>
      <div class="probootstrap-overflow">
        <nav class="probootstrap-nav">
          <ul>
					<li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="index.html">Home</a></li>
					<!-- <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="services.html">Services</a></li> -->
					<li class="probootstrap-animate active" data-animate-effect="fadeInLeft"><a href="news_letter.php">North News</a></li>
					<li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="photos.html">Photos</a></li>
					<li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
        <footer class="probootstrap-aside-footer probootstrap-animate" data-animate-effect="fadeInLeft">
          <ul class="list-unstyled d-flex probootstrap-aside-social">
            <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
            <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
            <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
          </ul>
             
        </footer>
      </div>
    </aside>


    <main role="main" class="probootstrap-main js-probootstrap-main">
      <div class="probootstrap-bar">
        <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a>
        <div class="probootstrap-main-site-logo"><a href="index.html">Aside</a></a></div>
      </div>
			<section class="probootstrap-section">
				<div class="container-fluid">
					<div class="row mb-5 justify-content-center">
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-8 mx-auto">
									<h2 class="h1 mb-5 mt-0">The North Korea Newsletter</h2>
								 <?php 						 
								echo son_news();
						     ?>							
								</div>
							</div>
			<p class="mb-5 statue1"><img src="./images/Rodong.jpeg" alt="Free Bootstrap 4 Template by uicookies.com" class="img-fluid"></p>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="owl-carousel probootstrap-owl">
								<div class="item">
									<img src="./images/Flag.svg" class="img-fluid" alt="Free Template by uicookies.com">
									<div class="p-4 border border-top-0 son_news1">
										<h4>조선로동자당</h4>
										<p>조선로동당은 조선민주주의인민공화국의 유일 집권정당이다. 한자 표기는 "로동당"이지만, 영문 표기로는 Workers' Party of Korea, 즉 "조선로동자당"이다.</p>
									</div>
								</div>
								<div class="item">
									<img src="./images/high_table.png" class="img-fluid" alt="Free Template by uicookies.com">
									<div class="p-4 border border-top-0">
										<h4>국무위원회</h4>
										<p>조선민주주의인민공화국 국무위원회(朝鮮民主主義人民共和國國務委員會)는 조선민주주의인민공화국의 최고 통치 기관이자 조선민주주의인민공화국 정부의 권한에 속하는 중요정책을 심의하는 최고 정책
											심의기관, 국가 관리 기관이다
											그리고 국가의 대표 직책는 국무위원장이다.</p>
									</div>
								</div>
								<div class="item">
									<img src="./images/Flag_solider.png" class="img-fluid" alt="Free Template by uicookies.com">
									<div class="p-4 border border-top-0">
										<h4>조선인민군</h4>
										<p>조선인민군은 조선로동당의 군대를 가리키는 말이다. 조선로동당의 당군이지만 사실상 조선민주주의인민공화국의 국가 군대의 성격을 갖는다. 조선인민군은 육군, 해군, 공군, 전략군과
											특수작전군을 인민군 총참모장이 지휘하는 단일종합군체제이다.</p>
									</div>
								</div>
								<div class="item">
			                    <img src="images/person_1.jpg" class="img-fluid" alt="Free Template by uicookies.com">
			                    <div class="p-4 border border-top-0">
			                      <h4>James Carl</h4>
			                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			                    </div>
			                  </div>
			                  <div class="item">
			                    <img src="images/person_2.jpg" class="img-fluid" alt="Free Template by uicookies.com">
			                    <div class="p-4 border border-top-0">
			                      <h4>Craig Smith</h4>
			                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			                    </div>
			                  </div>
							</div>
						</div>
					</div>
			
			
			
				</div>
			</section>
      </div>  

      <div class="container-fluid d-md-none">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-unstyled d-flex probootstrap-aside-social">
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
            </ul>
              
          </div>
        </div>
      </div>

    </main>

    

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>

    <script src="js/main.js"></script>
    
    
  </body>
</html>