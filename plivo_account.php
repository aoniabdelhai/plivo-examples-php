<?php
    require_once '../plivo.php';

    $auth_id = "XXXXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";


    $p = new RestAPI($auth_id, $auth_token);


    //Get Account
    $response = $p->get_account();


    //Modify Account
    $params = array (
        'name' => 'Modified Name',
        'city' => 'Modified City',
        'address' => 'Changed Address',
    );
    $response = $p->modify_account($params);


    //Create Subaccount
    $response = $p->create_subaccount();

    //Get Subaccounts
    $response = $p->get_subaccounts();


    //Delete Subaccount
    $params = array(
        'subauth_id' => 'XXXXXXXXXXXXXXXXXXXX',
    );
    $response = $p->delete_subaccount($params);
?>
