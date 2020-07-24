<?php
$food=array("fruit"=>array("apple"=>"1000", "pear"=>"2000","grape"=>"3000","strawberry"=>"4000"),"fish"=>array("gwang"=>"21000","bol"=>"31000"));
$FoodData=$food;
$out=json_encode($FoodData);
echo $out;
?>