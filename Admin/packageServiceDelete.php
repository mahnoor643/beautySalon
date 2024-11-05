<?php
$id=$_GET['id'];
require "../assets/conn.php";

$delete_cancel="delete from packageDeals where packageDealID='$id'";
    $delete_cancel_run=mysqli_query($conn,$delete_cancel);
    if(!$delete_cancel_run){
        echo "<script type='text/javascript'>alert('$message');</script>";
    }else {
        echo "<script>
        window.location.href = 'packages.php?id=$id';
        alert('Package Deal deleted');
    </script>";
    }
?>