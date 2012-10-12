<?php
    require 'plivo.php';
    	
    $auth_id = "XXXXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
    
    $p = new RestAPI($auth_id, $auth_token);

    $first_user = $_REQUEST['firstuser'];
    $second_user= $_REQUEST['second_user'];
    $custom_id = '12121211110';
    
    // Make Call
    $params = array(
            'to' => $first_user,
            'from' => $custom_id,
            'ring_url' => 'http://server.name/ring_url.php',
            'answer_url' => 'http://server.name/plivo_call_second_user.php?CLID='.$first_user.'To='.$second_user,
            'hangup_url' => 'http://server.name/hangup_url.php',
        );

    $response = $p->make_call($params);

?>