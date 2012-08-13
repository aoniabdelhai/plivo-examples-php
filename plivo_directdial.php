<?php
    require 'Net/plivo.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
       $dst = $_GET['To'];
       $src = $_GET['CLID'];
       if(! $src) {
           $src = $_GET['From'];
       }
       $cname = $_GET['CallerName'];
    } else if($_SERVER['REQUEST_METHOD'] == 'POST') {
       $dst = $_POST['To'];
       $src = $_POST['CLID'];
       if(! $src) {
           $src = $_POST['src'];
       }
       $cname = $_POST['CallerName'];
    } else { 
       echo("Method not allowed!");
       die();
    }

    $response = new Response();
    if($dst) {
        $dial_params = array();
        if($src) 
            $dial_params['callerId'] = $src;
        if($cname)
            $dial_params['callerName'] = $cname;

        $dial = $response->addDial($dial_params);
        $dial->addNumber($dst);
    } else {
        $response->addHangup();
    }

    header("Content-Type: text/xml");
    echo($response->toXML());
?>