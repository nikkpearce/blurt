
<?php
include("../model/filedb.php");

if($_POST['method'] == "insert"){
    insert_file();
}

if($_POST['method'] == "get_u_files"){
    get_files_by_uid();
}

if($_POST['method'] == "update_u_files"){
    update_u_files());
}

if($_POST['method'] == "delete_u_files"){
    delete_u_files();
}

?>