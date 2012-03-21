<?php
    require_once '../plivo.php';

    $auth_id = "XXXXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

    $p = new RestAPI($auth_id, $auth_token);


    // Make Call
    $params = array(
            'to' => '1212121212121',
            'from' => '43434343434343',
            'ring_url' => 'http://example.com/ring_url',
            'answer_url' => 'http://example.com/answer_url',
            'hangup_url' => 'http://example.com/hangup_url',
        );
    $response = $p->make_call($params);


    // Hangup Call
    $params = array(
            'call_uuid' => 'XXXXXXXXXXXXXXXXXXXXXXXXX',
        );
    $response = $p->hangup_call($params);


    // Hangup All Calls
    $response = $p->hangup_all_calls();


    // Transfer Calls
    $params = array(
            'call_uuid' => 'XXXXXXXXXXXXXXXXXXXXXXXXX',
            'url' => 'http://example.com/transfer_call',
            'method' => 'POST',
        );
    $respomse = $p->transfer_call($params);


    // Record Call
    $params = array(
        'call_uuid' => 'XXXXXXXXXXXXXXXXXXXXXXXXX',
        'time_limit' => '60',
        'file_format' => 'mp3',
        'url' => 'http://example.com/record_url_fetch',
        'method' => 'POST',
    );
    $response = $p->record($params);


    // Stop Record
    $params = array(
        'call_uuid' => 'XXXXXXXXXXXXXXXXXXXXXXXXX',
        'url' => 'http://example.com/record_url_fetch', //Url returned by record api
    );
    $response = $p->stop_record($params);


    // Play Sound
    $params = array(
        'call_uuid' => 'XXXXXXXXXXXXXXXXXXXXXXXXX',
        'url' => 'http://example.com/play_to_call', //Url returned by record api
    );
    $response  = $p->play($params);


    // Stop Play
    $params = array(
        'call_uuid' => 'XXXXXXXXXXXXXXXXXXXXXXXXX',
    );
    $response  = $p->stop_play($params);


    // Get Subaccount CDR
    $params = array(
        'call_uuid' => 'XXXXXXXXXXXXXXXXXXXXXXXXX',
    );
    $response  = $p->get_subaccount_cdrs($params);
?>
