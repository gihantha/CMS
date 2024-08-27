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
                        <!-- Handle insert category
                        <?php insertCategory(); ?>
                        // Handle category update
                        <?php updateCategory(); ?>
                        // Handle category deletion
                        <?php deleteCategory(); ?>

                        <?php

                        

                        // Prepare for edit
                        $edit_mode = false;
                        $edit_cat_id = 0;
                        if (isset($_GET['edit'])) {
                            $edit_cat_id = $_GET['edit'];
                            $edit_mode = true;
                            $query = "SELECT * FROM categories WHERE cat_id = $edit_cat_id";
                            $select_categories_id = mysqli_query($connection, $query);

                            if ($row = mysqli_fetch_assoc($select_categories_id)) {
                                $cat_title = htmlspecialchars($row['cat_title']);
                            } else {
                                echo "<div class='alert alert-danger'>Category not found</div>";
                                $edit_mode = false;
                            }
                        }
                        ?>

                        <!-- Add Category Form -->
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Category Name</label>
                                <input type="text" name="cat_title" id="cat_title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="add_submit" value="Add Category" class="btn btn-primary btn-sm">
                            </div>
                        </form>

                        <!-- Update Category Form -->
                        <?php if ($edit_mode): ?>
                            <form action="" method="post">
                                <input type="hidden" name="cat_id" value="<?php echo $edit_cat_id; ?>">
                                <div class="form-group">
                                    <label for="cat_title">Update Category Name</label>
                                    <input value="<?php echo $cat_title; ?>" type="text" name="cat_title" id="cat_title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="update_submit" value="Update Category" class="btn btn-primary btn-sm">
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>

                    <div class="col-6 col-xs-6">
                        
                        <table class="table table-bordered table-hover table-secondary">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php findAllCategories(); ?>
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
