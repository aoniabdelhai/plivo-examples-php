<?php
    require 'plivo.php';

    //start recording the call after the Dial has been answered.
    $record_params = array(
                   'action' => 'http://some.domain.com/recordfile/', 
                   'startOnDialAnswer' => 'true',
                   );
    $dial_params = array('callerId' => '12121212121');
    $number = '12222222222';

    $response = new Response();
    $response->addRecord($record_params);
    $dial = $response->addDial($dial_params);
    $dial->addNumber($number);

    echo($response->toXML());
?>
