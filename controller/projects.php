

<?php
include("../model/projectsdb.php");

if($_POST['method'] == "insert"){
    insert_projects();
}

if($_POST['method'] == "get_u_files"){
    get_projects_by_uid();
}

if($_POST['method'] == "update_u_files"){
    update_u_projects());
}

if($_POST['method'] == "delete_u_files"){
    delete_u_projects();
}

?>