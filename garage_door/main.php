<?php
	$url = "https://api.particle.io/v1/devices/30002f000c51343334363138/led?access_token=b25927445524a0d2b01e1bbd9896ad4d410b723b";

    $ch = curl_init($url);
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, array('arg' => 'on'));
    //curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Authorization: b25927445524a0d2b01e1bbd9896ad4d410b723b');
    
    $response = curl_exec( $ch );
?>