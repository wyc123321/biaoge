<?php
include "db.php";
$id=$_GET["id"];
$attr=$_GET["attr"];
$value=$_GET["value"];
$db->query("update stu set $attr='$value' where id=".$id);
if($db->affected_rows>0){
    echo "ec";
}
?>
