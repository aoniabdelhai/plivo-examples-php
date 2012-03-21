<?php
    require_once '../plivo.php';
    
    $auth_id = "XXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

    $p = new RestAPI($auth_id, $auth_token);

    // Get Live Conferences
    $p->get_live_conferences();

    

    // Get Live conference
    $params = array(
            'conference_id' => 'XXXXXXXXXXXXXXXXXXXX',
        );
    $p->get_live_conference($params);


    // Hangup Conference
    $params = array(
            'conference_id' => 'XXXXXXXXXXXXXXXXXXXX',
        );
    $p->hangup_conference($params);


    // Hangup Member
    $params = array(
            'conference_id' => 'XXXXXXXXXXXXXXXXXXXX',
            'member_id' => 'MMMMMMMMMMMMM',
        );
    $p->hangup_member($params);


    // Record Conference
    $params = array(
            'conference_id' => 'XXXXXXXXXXXXXXXXXXXX',
        );
    $p->record_conference($params);


    // Stop Recording Conference
    $params = array(
            'conference_id' => 'XXXXXXXXXXXXXXXXXXXX',
        );
    $p->stop_record_conference($params);


    // Get Recordings
    $p->get_recordings();
?>
