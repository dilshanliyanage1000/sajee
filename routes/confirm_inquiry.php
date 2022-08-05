<?php

include_once("../functions/inquiries.php");

$result = ConfirmInquiry($_POST["id"]);

echo ($result);
