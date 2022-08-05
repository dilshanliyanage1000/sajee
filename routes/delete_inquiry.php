<?php

include_once("../functions/inquiries.php");

$result = DeleteInquiry($_POST["id"]);

echo ($result);
