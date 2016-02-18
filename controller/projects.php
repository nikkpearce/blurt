

<?php
include("../model/projectsdb.php");

if($_POST['method'] == "insert"){
    insert_projects();
}

if($_POST['method'] == "get_u_projects"){
    get_projects_by_uid();
}

if($_POST['method'] == "update_u_projects"){
    update_u_projects());
}

if($_POST['method'] == "delete_u_projects"){
    delete_u_projects();
}

?>