<?php
include("../model/msgdb.php");
include("../model/likedb.php");

if($_POST['method'] == "insert"){
    insert_message();
}

if($_POST['method'] == "getall"){
    get_messages();
}

if($_POST['method'] == "like"){
    insert_like();
}

if($_POST['method'] == "getlike"){
    get_likes();
}
?>