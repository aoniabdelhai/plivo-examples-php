<?php
require_once "plivo.php";

$to = $_REQUEST['To'];
$from = $_REQUEST['From'];
$text = $_REQUEST['Text'];
$msg_id = $_REQUEST['MessageUUID'];

echo "Message received from $from on $to:";
echo "$text";
?>
