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
            echo "<td><center><a href='posts.php?delete=$post_id' class='btn btn-danger'><i class='fas fa-fw fa-trash'></i></a></center></td>";
            echo "<td><center><a href='categories.php?edit=' class='btn btn-success'><i class='fas fa-fw fa-pen'></i></a></center></td>";
            echo "</tr>";
        }
        ?>

    </tbody>
</table>

<?php 
if(isset($_GET['delete'])){
    $the_post_id = $_GET['delete'];
    $query =  "DELETE FROM posts WHERE post_id= {$the_post_id}";
    $delete_query = mysqli_query($connection, $query);
}
?>