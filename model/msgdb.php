<?php
include("connect.php");

function insert_message(){
    //create info for users
    global $db;
    
    $query = "INSERT INTO messages (text, user_id) VALUES ('".$_POST['text']."', ".$_POST['user_id'].")";
    $result = $db->query($query);
}

function get_messages(){
    //read info for users
    global $db;
    $query = "SELECT messages.id, messages.text, users.username,
                (SELECT COUNT(*) FROM likes WHERE likes.message_id = messages.id) AS numLikes
                FROM messages
                LEFT JOIN users ON users.id = messages.user_id";
    $result = $db->query($query);
    
    echo json_encode($result->fetchAll());
    
}

function update_message(){
    //update info for user
}

function delete_message(){
    //delete info for user
    
}

?>