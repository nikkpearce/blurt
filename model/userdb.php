<?php
include("connect.php");

function insert_user(){
    //create info for users
    global $db;
    
    $query = "INSERT INTO users (email, password, admin, firstName, lastName) VALUES ('".$_POST['email']."', '".$_POST['password']."', '".$_POST['admin']."', '".$_POST['firstName']."', '".$_POST['lastName']."')";
    $result = $db->query($query);
}

function get_users(){
    //read info for users
    
}

function get_user_by_username_password(){
    global $db;
    
    $query = "SELECT id FROM users WHERE password = '".$_POST['password']."' AND email = '".$_POST['email']."'";
    $result = $db->query($query);
    
    echo json_encode($result->fetchAll());
}

function update_user(){
    //update info for user
}

function delete_user(){
    //delete info for user
    
}

//TESTING
//insert_user();
?>