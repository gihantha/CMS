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
                        <h1 class="h3 mb-0 text-gray-800">Welcome to Categories</h1>
                    </div>

                    <div class="col-6 col-xs-6">
                        <?php

                        // Handle category addition
                        if (isset($_POST['submit'])) {
                            $cat_title = $_POST['cat_title'];

                            if (empty($cat_title)) {
                                echo "<div class='alert alert-danger'>This field should not be empty</div>";
                            } else {
                                $cat_title = mysqli_real_escape_string($connection, $cat_title);

                                $query = "INSERT INTO categories (cat_title) VALUES ('$cat_title')";
                                $create_category_query = mysqli_query($connection, $query);

                                if (!$create_category_query) {
                                    die('<div class="alert alert-danger">QUERY FAILED: ' . mysqli_error($connection) . '</div>');
                                } else {
                                    echo "<div class='alert alert-success'>Category added successfully</div>";
                                    // Redirect to avoid duplicate submissions on page refresh
                                    header("Location: categories.php");
                                    exit();
                                }
                            }
                        }

                        // Handle category deletion
                        if (isset($_GET['delete'])) {
                            $the_cat_id = $_GET['delete'];

                            $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
                            $delete_query = mysqli_query($connection, $query);

                            if (!$delete_query) {
                                die('<div class="alert alert-danger">QUERY FAILED: ' . mysqli_error($connection) . '</div>');
                            } else {
                                echo "<div class='alert alert-success'>Category deleted successfully</div>";
                                // Redirect to avoid reloading and re-executing the deletion
                                header("Location: categories.php");
                                exit();
                            }
                        }
                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Category Name</label>
                                <input type="text" name="cat_title" id="cat_title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Add Category" class="btn btn-primary btn-sm">
                            </div>
                        </form>
                    </div>

                    <div class="col-6 col-xs-6">
                        <?php
                        $query = "SELECT * FROM categories";
                        $select_all_categories = mysqli_query($connection, $query);
                        ?>
                        <table class="table table-bordered table-hover table-secondary">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($select_all_categories)) {
                                    $cat_title = htmlspecialchars($row['cat_title']);
                                    $cat_id = htmlspecialchars($row['cat_id']);

                                    echo "<tr>";
                                    echo "<td>$cat_id</td>";
                                    echo "<td>$cat_title</td>";
                                    echo "<td><a href='categories.php?delete={$cat_id}' class='btn btn-danger'><i class='fas fa-fw fa-trash'></i></a></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
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
