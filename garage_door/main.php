<?php
	$url = "https://api.particle.io/v1/devices/DEVICEID/led?access_token=ACCESSTOKEN";

    $ch = curl_init($url);
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, array('arg' => 'on'));
    //curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Authorization: ACCESSTOKEN');
    
    $response = curl_exec( $ch );
?>
