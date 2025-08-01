<?php
include_once '../dbcon.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "UPDATE speaker_reg_2025 SET status = 0 WHERE id = $id";
    if (mysqli_query($con, $query)) {
        header("Location: speaker-reg-list.php"); 
        exit();
    } else {
        echo "Error updating status: " . mysqli_error($con);
    }
} 
?>