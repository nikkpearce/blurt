<?php
include("connect.php");

function insert_admin(){
    //create info for users
    global $db;
    
    $query = "INSERT INTO admin (email, password) VALUES ('".$_POST['email']."', '".$_POST['password']."')";
    $result = $db->query($query);
}



function get_user_by_admin_password(){
    global $db;
    
    $query = "SELECT id FROM admin WHERE password = '".$_POST['password']."' AND email = '".$_POST['email']."'";
    $result = $db->query($query);
    
    echo json_encode($result->fetchAll());
}
