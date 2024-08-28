<?php

function confirm($result)
{
    global $connection;
    if (!$result) {
        $connection;
        die("QUERY FAILED .");
    }
    ;
}

function insertCategory()
{
    global $connection;

    if (isset($_POST['add_submit'])) {
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
}

function updateCategory()
{
    global $connection;

    if (isset($_POST['update_submit'])) {
        $cat_id = $_POST['cat_id'];
        $cat_title = $_POST['cat_title'];

        if (empty($cat_title)) {
            echo "<div class='alert alert-danger'>This field should not be empty</div>";
        } else {
            $cat_title = mysqli_real_escape_string($connection, $cat_title);

            $query = "UPDATE categories SET cat_title = '$cat_title' WHERE cat_id = $cat_id";
            $update_category_query = mysqli_query($connection, $query);

            if (!$update_category_query) {
                die('<div class="alert alert-danger">QUERY FAILED: ' . mysqli_error($connection) . '</div>');
            } else {
                echo "<div class='alert alert-success'>Category updated successfully</div>";
                // Redirect to avoid duplicate submissions on page refresh
                header("Location: categories.php");
                exit();
            }
        }
    }
}

function deleteCategory()
{
    global $connection;

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
}

function findAllCategories()
{

    global $connection;

    $query = "SELECT * FROM categories";
    $select_all_categories = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_all_categories)) {
        $cat_title = htmlspecialchars($row['cat_title']);
        $cat_id = htmlspecialchars($row['cat_id']);

        echo "<tr>";
        echo "<td>$cat_id</td>";
        echo "<td>$cat_title</td>";
        echo "<td><center><a href='categories.php?delete={$cat_id}' class='btn btn-danger'><i class='fas fa-fw fa-trash'></i></a></center></td>";
        echo "<td><center><a href='categories.php?edit={$cat_id}' class='btn btn-success'><i class='fas fa-fw fa-pen'></i></a></center></td>";
        echo "</tr>";
    }
}
?>