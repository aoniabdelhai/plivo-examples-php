<?php
    require_once '../plivo.php';

    $auth_id = "XXXXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

    $p = new RestAPI($auth_id, $auth_token);


    // Get Numbers
    $response = $p->get_numbers();


    // Search Numbers
    $params = array(
        'contains' => '67',
    //    'startswith' => '84',
    );
    $response = $p->search_numbers($params);


    // Rent a number
    $params = array(
        'number' => '12121212121',
    );
    $response = $p->rent_number($params);


    // Unrent a number
    $params = array(
        'number' => '12121212121',
    );
    $response = $p->unrent_number($params);


    // Link application to number
    $params = array(
        'number' => '12121212121',
        'app_id' => 'XXXXXXXXXXX',
    );
    $response = $p->link_application_number($params);


    // Get Subaccount numbers
    $params = array(
        'subauth_id' => 'AAAAAAAAAAAAAAAA',
    );
    $response = $p->get_subaccount_numbers($params);

?>
