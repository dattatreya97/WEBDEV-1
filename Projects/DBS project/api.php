<?php

$dbc=mysqli_connect("localhost","root","Dattu@3121","RevelsTest") or die('cant connect:');

$query = "SELECT * FROM delegate_card_generation";
$result = mysqli_query($dbc,$query);


$data = "";
$i=0;

while ($row = mysqli_fetch_array($result)) {
	$data[$i]['name'] = $row['Name'];
	$data[$i]['RegNo'] = $row['RegNo'];
	$i++;
}

$js = json_encode($data);
echo $js;
?>