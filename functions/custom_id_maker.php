<?php

include_once('db_connection.php');

function Create_ID($id_field, $table_name, $desired_string)
{
    $conn = Connection();
    
    if (mysqli_errno($conn)) {
        echo (mysqli_error($conn));
    }

    $prev_id = "SELECT $id_field FROM $table_name ORDER BY $id_field DESC limit 1;";

    $result = mysqli_query($conn, $prev_id);

    if (mysqli_num_rows($result) > 0) {

        $rec = mysqli_fetch_assoc($result);
        $lid = $rec[$id_field];
        $num = substr($lid, 3);
        $num = $num + 1;
        $id_field = str_pad($num, 10, '0', STR_PAD_LEFT);
        $newId = $desired_string . $id_field;
        return ($newId);

    } else {

        $newId = $desired_string . '0000000001';
        return ($newId);
    }
}
