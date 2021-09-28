<?php
session_start();
$email_sent = '';
if (isset($_SESSION['email-sent'])) {
    session_destroy();
    if ($_SESSION['email-sent'])
        $email_sent = 'open_success_modal()';
    else
        $email_sent = 'open_error_modal()';
}



?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Forgot Password | Shiney-Heinic International</title>
    <!-- Favicon icon -->
    
    <link href="css/style.css" rel="stylesheet">
    <link href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">


</head>

<body class="h-100" onload="<?= $email_sent ?>">

    <script>
        function open_modal() {
            document.getElementById("waitBtn").click();
        }

        function open_success_modal() {
            document.getElementById("successBtn").click();
        }

        function open_error_modal() {
            document.getElementById("errorBtn").click();
        }
    </script>

    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Forgot Password ?</h4>
                                    <div class="form-group mt-2">
                                        <a>We will send you new Login Credentials via Email</a>
                                    </div>
                                    <form method="POST" action="send-new-password.php" onsubmit="open_modal()">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" id="email" class="form-control" name="email">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Send Email</button>
                                        </div>
                                    </form>
                                    <div class="form-group mt-3">
                                        <a href="index.php">Back to Sign In</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--**********************************
            Success Modal Start
        ***********************************-->
    <button hidden id="successBtn" data-toggle="modal" data-target="#successModal"></button>
    <div class="modal fade" id="successModal">
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
                                <h2 class="swal2-title" id="swal2-title" style="font-size: 20px;">New Credentials have been sent via Email Successfully !!
                                </h2>
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
            Error view End
        ***********************************-->
    <button hidden id="errorBtn" data-toggle="modal" data-target="#viewerrorModal"></button>
    <div class="modal fade" id="viewerrorModal">
        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-body">
                    <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
                        <div class="swal2-header">
                            <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>

                            <h2 class="swal2-title" id="swal2-title" style="display: flex;">Oops...</h2>
                        </div>
                        <div class="swal2-content">
                            <div id="error-message">Please retry after sometime...</div>

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--**********************************
            Error view End
        ***********************************-->


    <!--**********************************
           Wait Modal Start
        ***********************************-->
    <button id="waitBtn" data-toggle="modal" data-target="#editsuccessModal"></button>
    <div class="modal fade my-auto" id="editsuccessModal" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <form>
                <div class="modal-content">

                    <div class="modal-body">
                        <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
                            <div class="swal2-header text-center">
                                <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                    <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
                                </svg>
                                <h4 class="swal2-title" id="swal2-title" style="font-size: 20px; ">
                                    Please wait while sending the email...
                                </h4>
                                <button hidden type="button" id="closeBtn" class="swal2-cancel swal2-styled" data-dismiss="modal">

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--**********************************
          Wait Modal End
        ***********************************-->

    <style>
        .spinner {
            animation: rotator 1.4s linear infinite;
        }

        @keyframes rotator {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(270deg);
            }
        }

        .path {
            stroke-dasharray: 187;
            stroke-dashoffset: 0;
            transform-origin: center;
            animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;
        }

        @keyframes colors {
            0% {
                stroke: #4285f4;
            }

            25% {
                stroke: #de3e35;
            }

            50% {
                stroke: #f7c223;
            }

            75% {
                stroke: #1b9a59;
            }

            100% {
                stroke: #4285f4;
            }
        }

        @keyframes dash {
            0% {
                stroke-dashoffset: 187;
            }

            50% {
                stroke-dashoffset: 46.75;
                transform: rotate(135deg);
            }

            100% {
                stroke-dashoffset: 187;
                transform: rotate(450deg);
            }
        }
    </style>


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

</body>

</html>