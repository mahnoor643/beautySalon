<?php
$id=$_GET['id'];
include "../../assets/conn.php";

$delete_cancel="delete from serviceExpertise where serviceExpertiseID='$id'";
    $delete_cancel_run=mysqli_query($conn,$delete_cancel);
    if(!$delete_cancel_run){
        echo "<script type='text/javascript'>alert('$message');</script>";
    }else {
        echo "<script>
        window.location.href = 'serviceExpertise.php?id=$id';
        alert('Service Experty deleted');
    </script>";
    }
?>