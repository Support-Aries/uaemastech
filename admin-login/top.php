<?php session_start();
if (!isset($_SESSION['login']))
    header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MasTech-Admin</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MasTech Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-brand-text mx-3" style="color:white;font-weight: 600;">
                MasTech 2025
            </div>

            <li class="nav-item">
                <a class="nav-link" href="delegate-reg-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span> Delegate Reg</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="nomination-reg-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span> Nomination Reg</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="sponsorship-reg-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span> Sponsorship Reg</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="speaker-reg-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span> Speaker Reg</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="media-reg-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span> Media Reg</span></a>
            </li>





            <!-- <hr class="sidebar-divider">
            <div class="sidebar-brand-text mx-3" style="color:white;font-weight: 600;">
                ShipTek 2025 - Dubai
            </div>

            <li class="nav-item">
                <a class="nav-link" href="dubai25-delegate-reg-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dubai 25 Delegate Reg</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="dubai25-nomination-reg-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dubai 25 Nominations</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="dubai25-sponsorship-reg-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dubai 25 Sponsorship</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="dubai25-speaker-reg-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dubai 25 Speaker</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="dubai25-media-reg-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dubai 25 Media</span></a>
            </li> -->





            <!-- Nav Item - Tables -->
            <!--        <li class="nav-item active">-->
            <!--            <a class="nav-link" href="tables.html">-->
            <!--                <i class="fas fa-fw fa-table"></i>-->
            <!--                <span>Tables</span></a>-->
            <!--        </li>-->


        </ul>
        <!-- End of Sidebar -->