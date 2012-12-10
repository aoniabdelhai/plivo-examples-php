<?php
      require_once 'plivo.php';
           
      $body = 'Hi, Calling from Plivo';
      $body_speak = 'You just entered a wrong input! Have a good day!'
      $url = 'http://' . $_SERVER["SERVER_NAME"] . '/playTrumpet.mp3';
      $attributes = array (
        'loop' => 2,
      );
      $digits = $_REQUEST['Digits'];
      $response = new Response();
         
      if ($digits == '1') {
            $response->addPlay($url,$attributes);
      } elseif ($digits == '2') {
            $response->addSpeak($body,$attributes);
      } else {
            $response->addSpeak($body_speak,$attributes);
      }
         
      header("Content-Type: text/xml");
      echo($response->toXML());

?>

