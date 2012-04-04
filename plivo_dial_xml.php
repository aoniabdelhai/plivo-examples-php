<?php
    require_once 'plivo.php';

    $r = new Response();

    $d = $r->addDial(array("callerId" => "2XXXXXXX"));
    $d->addNumber('1XXXXXXX');

    echo($r->toXML());
    
    // Output:
    // <Response>
    // <Dial callerId="2XXXXXXX">
    // <Number>1XXXXXXX</Number>
    // </Dial>
    // </Response>

?>

