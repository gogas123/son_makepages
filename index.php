
<!----------------------------------------------------------------------------->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3 class="son2">테스트</h3>
          
        </header>
      </div>

			<?php
			
			$data = array(
								'age' => array(
										'age1'    => '25',
										'age2'    => '27'
								),

								'blood_type' => array(
										'type1'    => 'A',
										'type2'    => 'B'
								)    
										);

			$arr = array();
			$arr2 = array("A", "B", "C");
			
			$arr4 = array("google" => "http//google.com", "yahoo"=> "http://yahoo.com");
			$arr5 = arr('son', 'sung','ho');
			$arr_s=json_encode($arr5);
		
			echo $arr_s;

			?>


    </section><!-- #about -->

<!----------------------------------------------------------------------------->

