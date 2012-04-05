<?php
require_once 'lib/plivo.php';

$r = new Response();

$body = 'Hi, Calling from Plivo';
$url = 'http://examples.com/recordaction';

$record_attribute = array(
    'action' => $url,
    'maxLength' => 30,
    'playBeep' => TRUE
);

$r->addSpeak($body);
$r->addRecord($record_attribute);

header('Content-type: text/xml');
echo( $r->toXML());

?>
