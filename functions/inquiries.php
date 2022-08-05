<?php

date_default_timezone_set('Asia/Colombo');

include_once('db_connection.php');

include_once('custom_id_maker.php');

function PlaceInquiry($firstname, $lastname, $mail, $phone, $subject, $message)
{
    $conn = Connection();

    $id = Create_ID("inq_id", "inquiries_tbl", "INQ");

    $t = time();

    $datetime = date("Y-m-d h:m:s", $t);

    $sql_insert = "INSERT INTO inquiries_tbl (inq_id, inq_first_name, inq_last_name, inq_email, inq_contact, inq_subject, inq_message, inq_create_date, inq_status)
                    VALUES ('$id','$firstname','$lastname','$mail','$phone','$subject','$message','$datetime',1);";

    $sql_result = mysqli_query($conn, $sql_insert);

    if (mysqli_errno($conn)) {
        echo (mysqli_error($conn));
    }

    if ($sql_result > 0) {
        return "success";
    } else {
        return "Error, Try again !!";
    }
}

function ConfirmInquiry($inq_id)
{
    $conn = Connection();

    if (mysqli_errno($conn)) {
        echo (mysqli_error($conn));
    }

    $sql_update = "UPDATE inquiries_tbl SET inq_status = 2 WHERE inq_id = '$inq_id';";

    $sql_result = mysqli_query($conn, $sql_update);

    if ($sql_result > 0) {
        return "success";
    } else {
        return "Error, Try again !!";
    }
}

function DeleteInquiry($inq_id)
{
    $conn = Connection();

    if (mysqli_errno($conn)) {
        echo (mysqli_error($conn));
    }

    $sql_update = "UPDATE inquiries_tbl SET inq_status = 0 WHERE inq_id = '$inq_id';";

    $sql_result = mysqli_query($conn, $sql_update);

    if ($sql_result > 0) {
        return "success";
    } else {
        return "Error, Try again !!";
    }
}

function ChangeInquiry($inq_id)
{
    $conn = Connection();

    if (mysqli_errno($conn)) {
        echo (mysqli_error($conn));
    }

    $sql_update = "UPDATE inquiries_tbl SET inq_status = 1 WHERE inq_id = '$inq_id';";

    $sql_result = mysqli_query($conn, $sql_update);

    if ($sql_result > 0) {
        return "success";
    } else {
        return "Error, Try again !!";
    }
}

function InquiryList()
{
    $conn = Connection();

    $view_sql = "SELECT * FROM inquiries_tbl ORDER BY inq_create_date DESC;";

    $view_result = mysqli_query($conn, $view_sql);

    if (mysqli_errno($conn)) {
        echo (mysqli_error($conn));
    }

    $nor = mysqli_num_rows($view_result);

    if ($nor > 0) {

        $exportTable = '';

        while ($rec = mysqli_fetch_assoc($view_result)) {

            $exportTable .= "<tr>

                                <td>" . $rec['inq_create_date'] . "</td>

                                <td>" . $rec['inq_id'] . "</td>

                                <td>" . $rec['inq_first_name'] . " " . $rec['inq_last_name'] . "</td>

                                <td><a style='text-decoration: none; color: #664612;' href='mailto:" . $rec['inq_email'] . "'>" . $rec['inq_email'] . "</a></td>

                                <td><a style='text-decoration: none; color: #664612;' href='tel:0" . $rec['inq_contact'] . "'>" . $rec['inq_contact'] . "</a></td>

                                <td><u><b>" . $rec['inq_subject'] . "</b></u><br>" . $rec["inq_message"] . "</td>";


            if ($rec['inq_status'] == 0) {

                //DELETED INQUIRY

                $exportTable .= "<td style='text-align:center;'><span style='padding: 10px; color: #783935; background-color: #cc938f;'>Deleted</span></td>
    
                                <td style='text-align:center;'>

                                    <div class='row_custom'>

                                        <button class='change_btn' type='button' style='width:100%; background-color: #d6be89; color: #735719; border: none; padding: 10px; margin: 5px;' id='" . $rec['inq_id'] . "'>
                                            <i class='fa-trash fa-solid'></i>&nbsp;&nbsp;Change
                                        </button>

                                    </div>

                                </td>";
            }
            if ($rec['inq_status'] == 1) {

                //PENDING INQUIRY

                $exportTable .= "<td style='text-align:center;'><span style='padding: 10px; color: #73431e; background-color: #fac398;'>Pending</span></td>

                                <td style='text-align:center;'>

                                    <div class='row_custom'>
                                    
                                        <button class='confirm_btn' type='button' style='width:50%; background-color: #7ac269; color: #254f1c; border: none; padding: 10px; margin: 5px;' id='" . $rec['inq_id'] . "'>
                                            <i class='fa-check fa-solid'></i>&nbsp;&nbsp;Confirm
                                        </button>

                                        <button class='del_btn' type='button' style='width:50%; background-color: #d18c8c; color: #470e0e; border: none; padding: 10px; margin: 5px;' id='" . $rec['inq_id'] . "'>
                                            <i class='fa-trash fa-solid'></i>&nbsp;&nbsp;Delete
                                        </button>

                                    </div>

                                </td>";

            } else if ($rec['inq_status'] == 2) {

                //CONFIRMED INQUIRY

                $exportTable .= "<td style='text-align:center;'><span style='padding: 10px; color: #1a4d1d; background-color: #9fd6a2;'>Confirmed</span></td>

                                <td style='text-align:center;'>

                                    <div class='row_custom'>

                                        <button class='change_btn' type='button' style='width:50%; background-color: #d6be89; color: #735719; border: none; padding: 10px; margin: 5px;' id='" . $rec['inq_id'] . "'>
                                            <i class='fa-trash fa-solid'></i>&nbsp;&nbsp;Change
                                        </button>

                                        <button class='del_btn' type='button' style='width:50%; background-color: #d18c8c; color: #470e0e; border: none; padding: 10px; margin: 5px;' id='" . $rec['inq_id'] . "'>
                                            <i class='fa-trash fa-solid'></i>&nbsp;&nbsp;Delete
                                        </button>

                                    </div>

                                </td>";
            }

            $exportTable .= "</tr>";
        }

        echo $exportTable;
    } else {
        return (" No record found");
    }
}
