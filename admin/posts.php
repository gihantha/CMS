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
                                <table class="table table-bordered table-hover">
                                    <thead class="small">
                                        <tr>
                                            <th>Id</th>
                                            <th>Author</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Tags</th>
                                            <th>Comments</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        global $connection;

                                        $query = "SELECT * FROM posts";
                                        $select_all_posts = mysqli_query($connection, $query);

                                        while ($row = mysqli_fetch_assoc($select_all_posts)) {
                                            $post_id = htmlspecialchars($row['post_id']);
                                            $post_category_id = htmlspecialchars($row['post_category_id']);
                                            $post_title = htmlspecialchars($row['post_title']);
                                            $post_author = htmlspecialchars($row['post_author']);
                                            $post_date = htmlspecialchars($row['post_date']);
                                            $post_image = htmlspecialchars($row['post_image']);
                                            $post_content = htmlspecialchars($row['post_content']);
                                            $post_status = htmlspecialchars($row['post_status']);
                                            $post_tags = htmlspecialchars($row['post_tags']);
                                            $post_comment_count = htmlspecialchars($row['post_comment_count']);

                                            echo "<tr class='small'>";
                                            echo "<td>$post_id</td>";
                                            echo "<td>$post_author</td>";
                                            echo "<td>$post_title</td>";
                                            echo "<td>$post_category_id</td>";
                                            echo "<td>$post_status</td>";
                                            echo "<td><img width='100' src='../images/$post_image' alt='image'></td>";
                                            echo "<td>$post_tags</td>";
                                            echo "<td>$post_comment_count</td>";
                                            echo "<td>$post_date</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
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