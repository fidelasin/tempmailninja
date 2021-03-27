<?php
$cookilerim="";
$proxy="";
$pass="";
$email="xxxxx@ludxc.com";
$sifre="111111";
$useragent="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36";
$httpheaders    = array(
			'Accept: */*',
			'User-Agent: '.$useragent,
			'Referer: https://tempmail.ninja/',
			'Sec-Fetch-Dest: empty',
			'Sec-Fetch-Mode: cors',
			'Sec-Fetch-Site: same-origin',
			'Connection: keep-alive',
			'Host: tempmail.ninja'
			);		
$url="https://tempmail.ninja/api/get-all-events?temp_mail=".urlencode($email)."&password=$sifre&language=en&timezone=-10800";

 echo "<br>". $ceks=curl($proxy,$pass,$url,$useragent,$cookilerim,$httpheaders,'','','GET','HTTP/1.1');


function curl($proxy,$pass,$url,$useragent,$cookilerim,$headers,$posts,$ref,$method,$http) {

	$ch  = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	
			if($proxy != "")
	{
		curl_setopt($ch, CURLOPT_PROXY, "$proxy");
	}
	
			if($pass != "")
	{
		 curl_setopt($ch, CURLOPT_PROXYUSERPWD,"$pass");
	}
	if($cookilerim != "")
	{
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookilerim);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookilerim);
	}
	
	if($useragent != "")
	{
		curl_setopt($ch, CURLOPT_USERAGENT, "$useragent");
	}
	else
	{
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	}
	
	if($method != "")
	{
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
	}
	if($http != "")
	{
	curl_setopt($ch, CURLOPT_HTTP_VERSION, $http);
	}	
	if($headers != "")
	{
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	}
	curl_setopt($ch, CURLOPT_HEADER, 1);    
	curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_VERBOSE, true);
	
		if($posts != "")
	{
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $posts);

	}
	
if($ref != "")
	{
	curl_setopt($ch, CURLOPT_REFERER, $ref);

	}


	 $don = curl_exec($ch);
return $don;
}

