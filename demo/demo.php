<!DOCTYPE html>
<html>
<head>
<title>Team 16026 Demo -- Ground</title>
<meta charset="utf-8" />
<meta http-equiv="refresh" content="5;URL=demo.php" />
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h1>Team 16026 Demo -- Ground Station</h1>
<div id="contents">
<div class="left">
	<img id="target" src="dump/roi.jpg" alt="Region of Interest from RF" height="256" width="256"/>
</div>

<?php
$arr = file("dump/target_info.txt");
$shape = $arr[0];
$color = $arr[1];
$letter = $arr[2];
?>

<div class="right">
	<ul id="characteristics">
	<li>Color: <?=$shape?></li>
		<li>Shape: <?=$color?></li>
		<li>Letter: <?=$letter?></li>
	</ul>
</div>
</div>
</body>
</html>
