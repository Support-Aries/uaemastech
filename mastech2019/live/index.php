<?php 
 include 'database.php';
 
 
$sql = "select * from livesettings where id=6";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$page = $row['value'];

$sql = "select * from livesettings where id=7";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$home = $row['value'];

if ($page == 1)
    include 'timer.php';
if ($page == 2)
    include 'live.php';
if ($page == 3)
    header("Location:$home")
    
    
    ?>