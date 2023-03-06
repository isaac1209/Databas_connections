<?php
if (!empty($_REQUEST["button"])) {
    $input_name = $_REQUEST['name'];
    $input_text = $_REQUEST['message'];
    $date= date('Y-m-d H:i:s');
    $Obj->insert_2_DB($input_name,$input_text,$date);
    header("Location:index.php");

}