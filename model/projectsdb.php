<?php
include("connect.php");

//projects = file
// images = files


function insert_projects(){
    //create info for users
    global $db;
    
    $query = "INSERT INTO projects (file, id, message, userid) VALUES ('".$_POST['file']."', '".$_POST['id']."', '".$_POST['message']."', ".$_POST['userid'].")";
    $result = $db->query($query);
}

function get_projects(){
    //read info for users
    global $db;
    
    $query = "SELECT file, id, message, userid FROM projects";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function get_projects_by_uid(){
    global $db;
    
    $query = "SELECT file, id, message FROM projects WHERE userid = ".$_POST['userid'];
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function update_projects(){
    global $db;
    $query = "UPDATE projects (file, id, message) SET files = '".$_POST['file']."', message = '".$_POST['message']."' WHERE id = ".$_POST['id']."";
    $result = $db->query($query);
    echo json_encode("Updated!");
}

function delete_projects(){
    
    global $db;
    $query = "DELETE FROM projects WHERE id =".$_POST['id']."";
    $result = $db->query($query);
    echo json_encode("DELETED");
    
}