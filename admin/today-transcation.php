<?php
session_start();
require("check-authenticate.php");
require("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard | Shiney-Heinic International</title>
    <!-- Favicon icon -->
   
    <!-- Datatable -->
    <link href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script>
       

        function delete_message(id) {
            document.getElementById("delete").value = id;
        }
    </script>

</head>

<body onload="document.getElementById('serial_no').click()">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="dashboard.php" class="brand-logo">
                </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-fullscreen" href="#">
                                    <svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                        <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                        </path>
                                    </svg>
                                    <svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize">
                                        <path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <div class="header-info">
                                        <span>Hey, <strong>Admin</strong></span>
                                        <small>Shiney-Heinic International</small>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="nav menu-tabs">
                    <li class="nav-item">
                        <a class="nav-link " href="dashboard.php">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#ffffff" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#ffffff" fill-rule="nonzero" opacity="0.5" />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="today-transcation.php">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#3A7AFE" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) " />
                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#3A7AFE" fill-rule="nonzero" opacity="0.5" />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact-details.php">
                           
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#ffffff" />
                                </g>
                            </svg>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-list.php">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#ffffff" />
                                </g>
                            </svg>
                        </a>
                    </li>

                </ul>
            </div>
            <a href="logout.php" class="logout-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg></a>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->



        <!--**********************************
            Success Modal Start
        ***********************************-->
        <button hidden id="successBtn" data-toggle="modal" data-target="#successModal"></button>
        <div class="modal fade" id="successModal" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <form>
                    <div class="modal-content">

                        <div class="modal-body">
                            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
                                <div class="swal2-header">
                                    <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
                                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                        <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                                        <div class="swal2-success-ring"></div>
                                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);">
                                        </div>
                                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                    </div>
                                    <h2 class="swal2-title" id="swal2-title" style="display: flex;">New Record Inserted Successfully !!
                                    </h2>
                                </div>

                                <div class="swal2-actions" style="display: flex;"><button type="button" onclick="window.location.reload()" class="swal2-confirm swal2-styled" aria-label="" style="border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">OK</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!--**********************************
            Success Modal End
        ***********************************-->

      

        <!--**********************************
           Delete Success Modal Start
        ***********************************-->
        <button hidden id="deleteSuccessBtn" data-toggle="modal" data-target="#deleteSuccessModal"></button>
        <div class="modal fade" id="deleteSuccessModal" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <form>
                    <div class="modal-content">

                        <div class="modal-body">
                            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
                                <div class="swal2-header">
                                    <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
                                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                        <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                                        <div class="swal2-success-ring"></div>
                                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);">
                                        </div>
                                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                    </div>
                                    <h2 class="swal2-title" id="swal2-title" style="display: flex;">Record Deleted Successfully !!
                                    </h2>
                                </div>

                                <div class="swal2-actions" style="display: flex;"><button type="button" onclick="window.location.reload()" class="swal2-confirm swal2-styled" aria-label="" style="border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">OK</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!--**********************************
          Delete  Success Modal End
        ***********************************-->

        <!--**********************************
            Delete Modal Start
        ***********************************-->
        <div class="modal fade" id="deleteModal">
            <div class="modal-dialog" role="document">
                <form onsubmit="delete_form()" method="POST" id="delete_form">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
                                <div class="swal2-header">
                                    <div class="swal2-icon swal2-warning swal2-animate-warning-icon" style="display: flex;"><span class="swal2-icon-text">!</span></div>
                                    <h2 class="swal2-title" id="swal2-title" style="display: flex;">Sure you wanna
                                        delete ?</h2>
                                </div>
                                <div class="swal2-content">
                                    <div id="swal2-content">You will not be able to recover this
                                        file !!
                                    </div>
                                    <div class="swal2-actions">
                                        <input type="number" id="delete" name="delete" hidden>
                                        <button type="submit" class="swal2-confirm swal2-styled" style="background-color: rgb(221, 107, 85); border-left-color: rgb(221, 107, 85); border-right-color: rgb(221, 107, 85);">
                                            Delete it !!
                                        </button>
                                        <button type="button" id="close_delete" class="swal2-cancel swal2-styled" data-dismiss="modal">
                                            Cancel it !!
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!--**********************************
            Delete Modal End
        ***********************************-->

        <!--**********************************
            Error Modal End
        ***********************************-->
        <button hidden id="errorBtn" data-toggle="modal" data-target="#errorModal"></button>
        <div class="modal fade" id="errorModal">
            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-body">
                        <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
                            <div class="swal2-header">
                                <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>

                                <h2 class="swal2-title" id="swal2-title" style="display: flex;">Oops...</h2>
                            </div>
                            <div class="swal2-content">
                                <div id="swal2-content" style="display: block;">Something went wrong. Please try again later!!</div>

                            </div>
                            <div class="swal2-actions" style="display: flex;"><button type="button" class="swal2-confirm swal2-styled" data-dismiss="modal" aria-label="" style="border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">OK</button></div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--**********************************
            Error Modal End
        ***********************************-->

       


       



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
            <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span>Shiney-Heinic International</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Daily Transaction Form</h4>
                              

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="example5" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th id="serial_no">Sr No.</th>
                                                <th>Customer Id</th>
                                                <th>Customer name</th>
                                                
                                                <th>Status</th>
                                                <th>amount</th>
                                                <th>TimeStamp</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           //SELECT id, name, name2, submittimestamp FROM recs WHERE DATE(submittimestamp) = CURDATE();
                                           //SELECT *  FROM `transaction`  WHERE time_stamp  > DATE_SUB(CURDATE(), INTERVAL 1 DAY)
                                            $q = " SELECT *  FROM `transaction`
                                            WHERE time_stamp > DATE_SUB(NOW(), INTERVAL 1 DAY) ";
                                            $list = $con->query($q);
                                            if (mysqli_num_rows($list) > 0) {
                                                while ($row = mysqli_fetch_assoc($list)) {
                                            ?>
                                                    <tr>
                                                        <td><?= $row["id"] ?>
                                                        </td>
                                                        <td><?= $row["customer_id"]  ?>
                                                        </td>
                                                        <td>
                                                            <?= $row["customer_name"] ?>
                                                        </td>
                                                        <td>
                                                            <?= $row["status"] ?>
                                                        </td>

                                                        <td>
                                                            <?= $row["amount"] ?>
                                                        </td>
                                                        <td>
                                                            <?= $row["time_stamp"] ?>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">

                                                                
                                                                <a href="#" class="btn btn-danger shadow btn-xs sharp" data-toggle="modal" data-target="#deleteModal" onclick="delete_message(<?= $row['id'] ?>)"><i class="fa fa-trash"></i></a>

                                                            </div>
                                                        </td>
                                                    </tr>

                                            <?php

                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://roundtechsquare.com/" target="_blank">RoundTechSquare</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->




    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>

    <!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
    <script>
      


      

      

        $("#delete_form").submit(function(e) {
            e.preventDefault();
        });

        function delete_form() {


            var userid = document.getElementById('delete');

            var formData = new FormData();
            formData.append("userid", userid.value);
            var arr = [userid.value];
            $.ajax(

                {
                    url: "./delete-message.php",
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,



                    success: function(data) {

                        if (data == "Record Deleted Successfully") {

                            setTimeout(document.getElementById('close_delete').click(), 2000)
                            document.getElementById("deleteSuccessBtn").click()


                        } else {
                            setTimeout(document.getElementById('close_delete').click(), 2000)
                            document.getElementById('errorBtn').click()


                        }

                    }



                }

            );

        }
    </script>


</body>

</html>