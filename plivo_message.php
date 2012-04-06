<?php
    require_once '../plivo.php';

    $auth_id = "XXXXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

    $p = new RestAPI($auth_id, $auth_token);


    // Send a message
    $params = array(
            'src' => '1202XXXXXX',
            'dst' => '1204XXXXXXX',
            'text' => 'Hi, Message from Plivo',
            'type' => 'sms',
        );
    $response = $p->send_message($params);

?>
