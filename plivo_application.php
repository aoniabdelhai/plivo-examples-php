<?php
    require_once '../plivo.php';

    $auth_id = "XXXXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

    $p = new RestAPI($auth_id, $auth_token);


    // Create Application
    $params = array(
        'app_name' => 'Gandalf the Gray',
        'answer_url' => 'http://example.com/answer_url',
        'answer_method' => 'POST',
        'hangup_url' => 'http://example.com/hangup_url',
        'hangup_method' => 'POST',
        'fallback_url' => 'http://example.com/fallback_url',
        'fallback_method' => 'POST',
    );           
    $response = $p->create_application($params);


    // Modify Application
    $response = $p->modify_application($params);


    // Delete Application
    $params = array(
        'app_id' => 'XXXXXXXXXXXXXXXXXXX',
    );
    $response = $p->delete_application($params);


    // Create Subaccount application
    $params = array(
        'subauth_id' => ' XXXXXXXXXXXX',
        'app_name' => 'Gimli the dwarf',
        'answer_url' => 'http://example.com/answer_url',
        'answer_method' => 'POST',
        'hangup_url' => 'http://example.com/hangup_url',
        'hangup_method' => 'POST',
        'fallback_url' => 'http://example.com/fallback_url',
        'fallback_method' => 'POST',
    ); 
    $response = $p->create_subaccount_application($params);

?>
    
