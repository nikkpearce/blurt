<?php
include("connect.php");

//image = file
// images = files


function insert_files(){
    //create info for users
    global $db;
    
    $query = "INSERT INTO files (file, id, userid) VALUES ('".$_POST['file']."', '".$_POST['id']."', ".$_POST['userid'].")";
    $result = $db->query($query);
}

function get_files(){
    //read info for users
    global $db;
    
    $query = "SELECT file, id, userid FROM files";
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function get_files_by_uid(){
    global $db;
    
    $query = "SELECT file, id FROM files WHERE userid = ".$_POST['userid'];
    $result = $db->query($query);
    echo json_encode($result->fetchAll());
}

function update_file(){
    
    global $db;
    $query = "UPDATE files (file, id) SET files = '".$_POST['file']."' WHERE id = ".$_POST['id']."";
    $result = $db->query($query);
    echo json_encode("Updated!");

}

function delete_file(){
   
     global $db;
    $query = "DELETE FROM files (file, id, userid) WHERE id =".$_POST['id']."";
    $result = $db->query($query);
    echo json_encode("DELETED");
    
}

?>