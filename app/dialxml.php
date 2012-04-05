<?php
require_once 'lib/plivo.php';

$r = new Response();

$dial_number = 12341234;

$attributes = array (
    'callerId' => 12343232,
);

$d = $r->addDial($attributes);
$d->addNumber($dial_number);


header('Content-type: text/xml');
echo( $r->toXML());

?>
