<?php
    require_once 'plivo.php';

    $attributes = array (
        'reason' => "busy",
    );

    $r = new Response();

    // Add hangup element
    $r->addHangup($attributes);
    echo($r->toXML());

?>
