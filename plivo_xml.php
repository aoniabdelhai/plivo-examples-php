<?php
    require_once 'plivo.php';

    $auth_id = "XXXXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

    $body = 'Hi, Calling from Plivo';
    $url = 'http://examples.com/playTrumpet.mp3'
    $attributes = array (
        'loop' => 2,
    );

    $r = new Response();

    // Add speak element
    $r->addSpeak($body, $attributes);

    // Add play element
    $r->addPlay($body, $attribute);

    // Add wait element
    $wait_attribute = array(
        'length' => 3,
    );
    $r->addWait($wait_attribute);

    //  Output:
    //  <Response>
    //  <Speak loop="2">Calling from Plivo</Speak>
    //  <Play loop="2">http://examples.com/playTrumpet.mp3</Play>
    //  <Wait length="3" />
    //  </Response>



