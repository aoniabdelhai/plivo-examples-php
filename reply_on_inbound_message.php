<?php
    require_once 'plivo.php';
    $to = $_REQUEST['To'];
    $from = $_REQUEST['From'];
    $text = $_REQUEST['Text'];

    $params = array(
            'src' => $to,
            'dst' => $from,
        );
    if ($text == "I need link!")
        $body = "This is the link which you are looking for : http://some_url/";
    else
        $body = "Wrong Text";

     $r = new Response();

     $r->addMessage($body,$params);

     echo($r->toXML());

?>
