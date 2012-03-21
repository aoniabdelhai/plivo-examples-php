<?php
    require_once 'plivo.php';

    $auth_id = "XXXXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

    $body = 'Hi, Calling from Plivo';
    $attributes = array (
        'loop' => 5,
    );

    $r = new Response();

    // Add speak element
    $r->addSpeak($body, $attributes);
    echo $r->toXML();

    // Add play element
    $r->addPlay($body, $attribute);
    echo $r->toXML();

    // Add wait element
    $wait_attribute = array(
        'length' => 2,
    );
    $r->addWait($wait_attribute);







