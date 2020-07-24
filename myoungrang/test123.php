			 <?php
// $data["mulgogi"]["13"] = 'F학점';
// $data["gamja"]["12"] = 'A학점';
// $data["gokuma"]["15"] = 'B학점';
// $member1 = array("name" => "서태지", "height" => "173cm", "weight" => "55kg");
// $member2 = array("name" => "양현석", "height" => "180cm", "weight" => "70kg");
// $member3 = array("name" => "이주노", "height" => "172cm", "weight" => "53kg");
// $memberData = array($member1, $member2, $member3);
// $output = json_encode($data,JSON_UNESCAPED_UNICODE) ;

$groupData = array();
$groupData["groupName"] = "서태지와 아이들";
$groupData["debutYear"] = "1992";
$groupData["memberCount"] = "3";
$member1 = array("name" => "서태지", "height" => "173cm", "weight" => "55kg");
$member2 = array("name" => "양현석", "height" => "180cm", "weight" => "70kg");
$member3 = array("name" => "이주노", "height" => "172cm", "weight" => "53kg");
$memberData = array($member1, $member2, $member3);
$groupData["memberData"] = $memberData;
$output =  json_encode($groupData);
echo $output;
			?> 
