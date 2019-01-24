<?php 
include 'db.php';
$db = new Database();
 
 
         $id = $_GET['id'];
         $query= "DELETE FROM stu_info WHERE id = '$id'";
        $deldata = $db->delete($query);
         if( $deldata){
         header('location:index.php');
        }
    ?>
                   