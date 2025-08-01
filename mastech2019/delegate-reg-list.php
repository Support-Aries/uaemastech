<?php
include('../dbcon.php');
include('top.php');
$attendee = isset($_GET['attendee']) ? $_GET['attendee'] : '';

$sql = "SELECT * from `delegate_reg_2025` where status='1' ";
if ($attendee)
    $sql .= "and qr_status = 2 ";
$sql .= "order by id desc";
$res = mysqli_query($con, $sql);
$totalcount1 = mysqli_num_rows($res);

$sql = "SELECT count(id) as tot_count from `delegate_reg_2025` where status='1'";
if ($attendee == '')
    $sql .= "and qr_status = 2 ";
$cn_res = mysqli_query($con, $sql);
$row_cnt = mysqli_fetch_assoc($cn_res);
$count = $row_cnt['tot_count'];

$res1 = mysqli_query($con, "select * from delegate_reg_2025 where status=1 and qr_status=2 order by id desc");

$db = "delegate_reg_2025";
$event_loc = "";
$event_date = "9th October 2024";
$conference = "09:00 AM – 05:00 PM";
$awards = "06:00 PM – 09:00 PM ";
$venue = "Hotel Sahara Star, Mumbai, India";
$venue_date = "9th October";
$title = "MasTech 2025";
$regtime = "8:30 AM";
$dresscode = "";
$gmap = "";
$sponsor = "";
$link = "";


?>






<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
<!-- jQuery library file -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- Datatable plugin JS library file -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!--                            <i class="fas fa-bell fa-fw"></i>-->
                        <!--                             Counter - Alerts -->
                        <!--                            <span class="badge badge-danger badge-counter">3+</span>-->
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <!--                            <h6 class="dropdown-header">-->
                        <!--                                Alerts Center-->
                        <!--                            </h6>-->
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <!--                                    <div class="small text-gray-500">December 12, 2019</div>-->
                                <!--                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>-->
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                </div>
                            </div>
                            <!--                                <div>-->
                            <!--                                    <div class="small text-gray-500">December 7, 2019</div>-->
                            <!--                                    $290.29 has been deposited into your account!-->
                            <!--                                </div>-->
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <!--                                <div>-->
                            <!--                                    <div class="small text-gray-500">December 2, 2019</div>-->
                            <!--                                    Spending Alert: We've noticed unusually high spending for your account.-->
                            <!--                                </div>-->
                        </a>
                        <!--                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>-->
                    </div>
                </li>

                <!-- Nav Item - Messages -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Messages -->
                        <!--                            <span class="badge badge-danger badge-counter">7</span>-->
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <!--                            <h6 class="dropdown-header">-->
                        <!--                                Message Center-->
                        <!--                            </h6>-->
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <!--                                <div class="font-weight-bold">-->
                            <!--                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>-->
                            <!--                                    <div class="small text-gray-500">Emily Fowler � 58m</div>-->
                            <!--                                </div>-->
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                <div class="status-indicator"></div>
                            </div>
                            <!--                                <div>-->
                            <!--                                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>-->
                            <!--                                    <div class="small text-gray-500">Jae Chun � 1d</div>-->
                            <!--                                </div>-->
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                <div class="status-indicator bg-warning"></div>
                            </div>
                            <!--                                <div>-->
                            <!--                                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>-->
                            <!--                                    <div class="small text-gray-500">Morgan Alvarez � 2d</div>-->
                            <!--                                </div>-->
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <!--                                <div>-->
                            <!--                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>-->
                            <!--                                    <div class="small text-gray-500">Chicken the Dog � 2w</div>-->
                            <!--                                </div>-->
                        </a>
                        <!--                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>-->
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <!--                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>-->
                        <!--                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">-->
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php
            /* $acc_query = mysqli_query($con,"select * from  delegate_registration2023 where  admin_status=1");$accepted= mysqli_num_rows($acc_query);
             $rej_query = mysqli_query($con,"select * from delegate_registration2023 where  admin_status=2");$rejted= mysqli_num_rows($rej_query);
             $pend = ($accepted + $rejted);
             $total = mysqli_num_rows($res); 
             $pending = $total - $pend ; */
            ?>


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6" style="text-align: center">
                            <a href="delegate-reg-list.php"
                                class="btn btn-info <?php if ($attendee == '') { ?>btn-info-selected<?php } ?>">Registrations
                                <span
                                    class="badge badge-danger">&nbsp;<?= $attendee == '' ? $totalcount1 : $count ?></span></a>
                            <a href="delegate-reg-list.php?attendee=1"
                                class="btn btn-info <?php if ($attendee) { ?>btn-info-selected<?php } ?>">Attendees<span
                                    class="badge badge-danger">&nbsp;<?= $attendee ? $totalcount1 : $count ?></span></a>
                        </div>

                        <div class="col-md-3">
                            <?php if ($attendee) { ?>
                                <a href="delegate-reg-export.php?attendee=1" class="btn btn-primary"
                                    style="float:right;">Excel-Export</a>
                            <?php } else { ?>
                                <a href="delegate-reg-export.php" class="btn btn-primary"
                                    style="float:right;">Excel-Export</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sl. No</th>

                                    <th>Name</th>
                                    <th>Official Mail</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                    <th>Company</th>
                                    <th>Nationality</th>
                                    <th>Country</th>
                                    <th>Designation</th>

                                    <th>Company Number</th>
                                    <th>Sector</th>
                                    <th>Mobile Number</th>
                                    <th>Additional Message</th>

                                    <th>Registration Date</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Sl. No</th>

                                    <th>Name</th>
                                    <th>Official Mail</th>
                                    <th>Action</th>
                                    <th>Status</th>
                                    <th>Company</th>
                                    <th>Nationality</th>
                                    <th>Country</th>
                                    <th>Designation</th>

                                    <th>Company Number</th>
                                    <th>Sector</th>
                                    <th>Mobile Number</th>
                                    <th>Additional Message</th>

                                    <th>Registration Date</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                // include('db.php');                     
//$res=mysqli_query($con,"select * from registration2022 where status=1 order by id desc");
                                if (mysqli_num_rows($res) > 0) {
                                    //if(mysql_num_rows($res)>0){
                                
                                    $i = 1;
                                    while ($row = mysqli_fetch_array($res)) {
                                        $regdate = date('d-m-Y', strtotime($row['added_date']));
                                        ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td>

                                                <?php if ($row['qr_status'] != 2) { ?>
                                                    <div id="buttondiv_<?= $row['id'] ?>">
                                                        <?php if (($row['qr_status'] == 1) && ($row['admin_status'] == 0)) { ?>
                                                            <button type="button" class="btn btn-warning"
                                                                onClick="changeapprovalstatus_resend(<?= $row['id'] ?>,1,'<?= $db ?>','<?= $event_loc ?>','<?= $title ?>','<?= $event_date ?>','<?= $conference ?>','<?= $awards ?>','<?= $venue ?>', '<?= $venue_date ?>','<?= $regtime ?>','<?= $dresscode ?>','<?= $gmap ?>','<?= $sponsor ?>','<?= $link ?>')">ReSend
                                                                mail</button>
                                                        <?php }
                                                        if (($row['qr_status'] == 0) && ($row['admin_status'] == 0)) { ?>
                                                            <button type="button" class="btn btn-primary"
                                                                onClick="changeapprovalstatus(<?= $row['id'] ?>,1,'<?= $db ?>','<?= $event_loc ?>','<?= $title ?>','<?= $event_date ?>','<?= $conference ?>','<?= $awards ?>','<?= $venue ?>', '<?= $venue_date ?>','<?= $regtime ?>','<?= $dresscode ?>','<?= $gmap ?>','<?= $sponsor ?>','<?= $link ?>')">Accept</button>
                                                            <br><br>
                                                            <button type="button" class="btn btn-danger"
                                                                onClick="changeapprovalstatus(<?= $row['id'] ?>,2,'<?= $db ?>','<?= $event_loc ?>','<?= $title ?>','<?= $event_date ?>','<?= $conference ?>','<?= $awards ?>','<?= $venue ?>', '<?= $venue_date ?>','<?= $regtime ?>','<?= $dresscode ?>','<?= $gmap ?>','<?= $sponsor ?>','<?= $link ?>')">Reject</button>
                                                        <?php } ?>
                                                    </div>

                                                <?php } ?>

                                            </td>
                                            <td>
                                                <div id="first_<?= $row['id'] ?>">
                                                    <?php switch ($row['qr_status']) {
                                                        case 0:
                                                            echo "<font color=black>Mail Not Sent</font>";
                                                            break;
                                                        case 1:
                                                            echo "<font color=red>Not Checked In</font>";
                                                            break;
                                                        case 2:
                                                            echo "<font color=green>Checked IN</font>";
                                                            break;
                                                        case 3:
                                                            echo "<font color=red><b>Rejected</b></font>";
                                                            break;
                                                    } ?>
                                                </div>

                                                <div>
                                                    <span id="acceptmsg_<?= $row['id'] ?>"
                                                        style="color:green;display: none">Accepted...Mail Sent</span>
                                                    <span id="rejectmsg_<?= $row['id'] ?>"
                                                        style="color:red;display: none">Rejected...Mail Sent</span>
                                                    <span id="checkinmsg_<?= $row['id'] ?>"
                                                        style="color:green;display: none">Checked IN</span>
                                                </div>
                                            </td>
                                            <td><?= $row['company'] ?></td>
                                            <td><?= $row['nationality'] ?></td>
                                            <td><?= $row['country'] ?></td>
                                            <td><?= $row['designation'] ?></td>
                                            <td><?= $row['company_number'] ?></td>

                                            <td><?= $row['sector'] ?></td>

                                            <td><?= $row['mobile'] ?></td>
                                            <td><?= $row['message'] ?></td>


                                            <td><?= $regdate ?></td>

                                            <td><a href="delete-delegatereg-25.php?id=<?Php echo $row['id']; ?>"
                                                    onClick="return confirm('Are You Sure Want To Delete?')">Delete</a></td>


                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                } else { ?>
                                    <tr>
                                        <td colspan="5" align="center">No data available in table</td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


    <?php include('footer.php'); ?>

    <script type="text/javascript">
        function changeapprovalstatus(id, st, db, event_loc, title, event_date, conference, awards, venue, venue_date, regtime, dresscode, gmap, sponsor, link) {
             //alert(id);
            // return false;
            $.ajax({

                type: "POST",
                async: false,
                url: 'mastech-mail-qr-creation.php',
                data: { id:id, st:st, db:db, event_loc:event_loc, title:title, event_date: event_date, conference: conference, awards: awards, venue: venue, venue_date: venue_date, regtime: regtime, dresscode: dresscode, gmap: gmap, sponsor: sponsor, link: link },
                async: true,
                success: function (data) {
                    //console.log(data);
                    // alert(data);
                    if (data == 1) {
                        alert('Mail sent Successfully');
                        $("#first_" + id).hide();
                        $("#acceptmsg_" + id).show();
                        $("#buttondiv_" + id).hide();
                    }
                    if (data == '2') {
                        alert('Rejected Successfully');

                        $("#first_" + id).hide();
                        $("#rejectmsg_" + id).show();
                        $("#buttondiv_" + id).hide();
                    }
                    else {
                        //alert('Error!!!'); 
                    }
                }
            });

        }

        function changeapprovalstatus_resend(id, st, db, event_loc, title, event_date, conference, awards, venue, venue_date, regtime, dresscode, gmap, sponsor, link) {
            // alert(id);
            // return false;
            $.ajax({

                type: "POST",
                async: false,
                url: 'mastech-resendmail-creation.php',
                data: { id: id, st: st, db: db, event_loc: event_loc, title: title, event_date: event_date, conference: conference, awards: awards, venue: venue, venue_date: venue_date, regtime: regtime, dresscode: dresscode, gmap: gmap, sponsor: sponsor, link: link },
                async: true,
                success: function (data) {
                    // alert(data);
                    if (data == 1) {
                        alert('Mail sent Successfully');
                        $("#first_" + id).hide();
                        $("#acceptmsg_" + id).show();
                        $("#buttondiv_" + id).hide();
                    }
                    if (data == 2) {
                        alert('Mail sent Successfully');
                        $("#first_" + id).hide();
                        $("#rejectmsg_" + id).show();
                        $("#buttondiv_" + id).hide();
                    }
                }
            });

        }

    </script>

    <script>
        $('#dataTable').dataTable({
            'iDisplayLength': 50
        });
    </script>