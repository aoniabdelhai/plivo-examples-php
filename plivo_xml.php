<?php
    require_once 'plivo.php';

    $body = 'Hi, Calling from Plivo';
    $url = 'http://examples.com/playTrumpet.mp3';
    $attributes = array (
        'loop' => 2,
    );

    $r = new Response();

    // Add speak element
    $r->addSpeak($body, $attributes);

    // Add play element
    $r->addPlay($url, $attributes);

    // Add wait element
    $wait_attribute = array(
        'length' => 3,
    );
    $r->addWait($wait_attribute);

    echo($r->toXML());

    //  Output:
    //  <Response>
    //  <Speak loop="2">Calling from Plivo</Speak>
    //  <Play loop="2">http://examples.com/playTrumpet.mp3</Play>
    //  <Wait length="3" />
    //  </Response>
    //
    //


    $r = new Response();

    $d = $r->addDial(array("callerId" => "2XXXXXXX"));
    $d->addNumber('1XXXXXXX');


    echo($d->toXML());
    
    // Output:
    // <Dial callerId="2XXXXXXX">
    // <Number>1XXXXXXX</Number>
    // </Dial>

