<?php
    require 'Net/plivo.php';

    $record_params = 
    $response = new Response();
    $response->addSpeak(
        "Please leave a message after the beep. 
        Press star when you are done", 
        array('language' => 'en-US', 'voice' => 'WOMAN')
    );
    $response->addPlay("http://url.to/sound/beep/");
    $response->addRecord(
        array(
             'action' => 'http://some.domain.com/recordfile/', 
             'maxLength' => '30',
             'finishOnKey' => '*',
             )
    );
    $response->addSpeak(
                "No recording received", 
                array('language' => 'en-US', 'voice' => 'WOMAN'));
    header("Content-Type: text/xml");
    echo($response->toXML());
?>