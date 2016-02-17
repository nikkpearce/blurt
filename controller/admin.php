<?php
include("../model/admindb.php");

if($_POST['method'] == "insert"){
    insert_admin();
}

if($_POST['method'] == "login"){
    get_user_by_admin_password();
}
?>