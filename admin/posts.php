<!DOCTYPE html>
<html lang="en">

<?php include "includes/admin_header.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "includes/admin_sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "includes/admin_navbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Welcome to Posts</h1>
                    </div>
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-12 p-4 m-2">
                               <?php
                               if(isset($_GET['source'])){
                                $source = $_GET['source'];
                               } else {
                                $source = '';
                               }

                               switch($source){
                                    case 'add_post';
                                        include "includes/add_post.php";
                                    break;
                                    case '100';
                                    echo "NICE 13";
                                    break;
                                    case '200';
                                    echo "NICE 20";
                                    break;
                                    case '300';
                                    echo "NICE 33";
                                    break;
                                    default:
                                    include "includes/view_all_posts.php";
                                    break;
                               };
                               
                               ?>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "includes/admin_footer.php"; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include "includes/logout_modal.php"; ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>