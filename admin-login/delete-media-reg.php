<?php
include_once '../dbcon.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "UPDATE media_reg_2025 SET status = 0 WHERE id = $id";
    if (mysqli_query($con, $query)) {
        header("Location: media-reg-list.php"); 
        exit();
    } else {
        echo "Error updating status: " . mysqli_error($con);
    }
} 
?>