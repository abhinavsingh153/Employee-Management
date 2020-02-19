<?php 
$connection = mysqli_connect('localhost:3308', 'root','');
$selected = mysqli_select_db($connection , 'record');
$Delete_Record_Id = $_GET['Delete'];
$Delete_Query="DELETE FROM emp_record WHERE id='$Delete_Record_Id'";
$Execute_Query = mysqli_query($connection,$Delete_Query);

if($Execute_Query){
    echo '<script>window.open("Delete_From_Database.php?Deleted=Recorded Deleted Successfully","_self")</script>';
}
?>