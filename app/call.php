<?php
require_once 'lib/plivo.php';

$auth_id = '';
$auth_token = '';

$r = new RestAPI($auth_id, $auth_token);

$params = array(
        'to' => '1202XXXXXX',
        'from' => '1203XXXXX',
        'answer_url' => 'http://example.com/speakxml.php',
    );

$response = $r->make_call($params);

?>
