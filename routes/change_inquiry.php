<?php

include_once("../functions/inquiries.php");

$result = ChangeInquiry($_POST["id"]);

echo ($result);
