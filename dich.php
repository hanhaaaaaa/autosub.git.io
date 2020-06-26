<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
</body>
</html>
<?php 
$error='{"error_code":368,"error_msg":"\u0110\u00e3 x\u1ea3y ra l\u1ed7i khi x\u1eed l\u00fd y\u00eau c\u1ea7u n\u00e0y. Vui l\u00f2ng th\u1eed l\u1ea1i sau. (368)","error_data":{"error_title":"Xin l\u1ed7i, t\u00ednh n\u0103ng n\u00e0y kh\u00f4ng kh\u1ea3 d\u1ee5ng ngay b\u00e2y gi\u1edd","error_message":"\u0110\u00e3 x\u1ea3y ra l\u1ed7i khi x\u1eed l\u00fd y\u00eau c\u1ea7u n\u00e0y. Vui l\u00f2ng th\u1eed l\u1ea1i sau."},"request_args":[{"key":"method","value":"user.register"},{"key":"api_key","value":"882a8490361da98702bf97a021ddc14d"},{"key":"attempt_login","value":"1"},{"key":"birthday","value":"1994-11-04"},{"key":"client_country_code","value":"VN"},{"key":"email","value":"lethivi0206f7@rocket.com"},{"key":"fb_api_caller_class","value":"com.facebook.registration.protocol.RegisterAccountMethod"},{"key":"fb_api_req_friendly_name","value":"registerAccount"},{"key":"firstname","value":"L\u00ea"},{"key":"format","value":"json"},{"key":"gender","value":"M"},{"key":"lastname","value":"Th\u1ecb Vi"},{"key":"locale","value":"vi_VN"},{"key":"password","value":"--sanitized--"},{"key":"reg_instance","value":"7836baf7-a676-b89f-0777-a2b04acd6aef"},{"key":"return_multiple_errors","value":"1"},{"key":"sig","value":"2ca961e69181012587399b5110a11efc"}],"email":"lethivi0206f7@rocket.com"}';
$transalted=json_decode($error);
print_r($transalted);
 ?>