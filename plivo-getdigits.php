<?php
require_once 'plivo-voicemail/plivo.php';

$r = new Response();
                             /*Input digits can be processed on the action url*/
$g = $r->addGetDigits(array('action' => 'http://server.com/receive_input.php', 'method' => 'GET')); 
$g->addSpeak('Press 1 for your message');
$r->addSpeak('Input not received');

header('Content-Type: text/xml');
echo($r->toXML());
?>
