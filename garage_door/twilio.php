<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message><?php 

	$url = 'https://api.particle.io/v1/devices/30002f000c51343334363138/led?access_token=b25927445524a0d2b01e1bbd9896ad4d410b723b';
 
	//if($_REQUEST['Digits'] == '55231'){
		$data = array(
			'access_token' => 'b25927445524a0d2b01e1bbd9896ad4d410b723b', 
			'params' => 'D0,HIGH'
		);
 
	// use key 'http' even if you send the request to https://...
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($data),
		),
	);
 
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
}
?>Hello, Mobile Monkey</Message>
</Response>

