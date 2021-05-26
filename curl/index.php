<?php
    $url="http://localhost:8889/api.php?arg=aaa"; # 別讓 index.php 跟 api.php 跑在同個 port, 會卡住
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    $payload = "aaa";
	if($payload!==null) { // POST
        curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    }
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);
    echo $result;
?>
