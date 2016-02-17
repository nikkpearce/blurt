<?php
include("../model/imagedb.php");

if($_POST['method'] == "insert"){
    insert_image();
}

if($_POST['method'] == "get_u_images"){
    get_images_by_uid();
}
?>