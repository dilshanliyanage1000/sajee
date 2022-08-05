<?php

include_once("../functions/inquiries.php");

$result = PlaceInquiry($_POST["first_name"], $_POST["last_name"], $_POST["inq_email"], $_POST["inq_contact"], $_POST["inq_subject"], $_POST["inq_message"]);

echo ($result);
