<?php
include("connect.php");

function insert_like(){
    //create info for users
    global $db;
    
    $query = "INSERT INTO likes (user_id, message_id) VALUES ('".$_POST['user_id']."', ".$_POST['message_id'].")";
    $result = $db->query($query);
}

function get_likes(){
    global $db;
    $query = "SELECT * FROM likes";
    $result = $db->query($query);
    
    echo json_encode($result->fetchAll());
}
?>