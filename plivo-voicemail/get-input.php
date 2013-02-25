<?php
	require_once 'plivo.php';
	
	$response = new Response();
	$response->addSpeak('Record your message at the tone, after you are done, press pound');
	$response->addRecord(array('action' => 'http://' . $_SERVER["SERVER_NAME"] . /*':' . $_SERVER["SERVER_PORT"] .*/ '/plivo-voicemail/confirm-input.php',
						   'method' => 'GET',
						   'maxLength' => '60',
						   'finishOnKey' => '#',
						   'playBeep' => 'true'));
	$response->addSpeak('Recording not received');
	$response->addRedirect('http://' . $_SERVER["SERVER_NAME"] . /*':' . $_SERVER["SERVER_PORT"] .*/ '/plivo-voicemail/get-input.php', array('method' => 'GET'));
	header('content-type: text/xml');
	echo($response->toXML());
?>
