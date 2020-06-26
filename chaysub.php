<!DOCTYPE html>
<html lang="en">
<!-- don vi la giay delay time tu dong refresh do -->
<meta http-equiv="refresh" content="60">
<head>
	<meta charset="UTF-8">
	<title>Auto Sub Clone - DuyDpQn</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php 
	require_once 'curllib.php';
	$idban=$_GET['idban'];
	$tab=20;
	//Dong 3 hang ke neu ko dung nha
	$token='EAAAAAYsX7TsBADXSH8oy2ByPs3P5OjBLTCwBDyqckhN3Mt7N0qFmk9AXmM69KBjHcRrtpUZBJMOJkzYfwn8Qlq89ZB7ZCvaZANZA9EdW1zcRcJHZAIOdoB313EUGbbYS9VK6Vi3hfZC5WnqWGdOYwrVTZA41sQV4htK9vAkgZBRfh5spicGcXFwR16Jll6atc5k8aoii2ndw4uEnSJuYDH1gO';
	$graph=json_decode(hellcatget('https://graph.facebook.com/'.$idban.'?fields=name&access_token='.$token));
	echo '<center><h1>Đang tiến hành tăng SUB cho UID :<span style="color:#FF0606"> '.$idban.'</span></h1><br />Loadding <img src="https://www.zopodo.com/tests/assets/images/fbloader.gif" width="15px" />  <br /> <h1> Số TAB đang bật là: <span style="color:#0634FF">'.$tab.'</span></h1> ';
?>
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">TOOL này ít lỗi, yên tâm mà dùng! Treo máy và lâu lâu fake ip thì sẽ lên thôi :))) </div>
			<div class="panel-body">
				<?php 
					for ($i=0; $i < $tab; $i++) { 
						echo '<iframe src="sub.php?idban='.$idban.'"></iframe>';
					}
				 ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>
