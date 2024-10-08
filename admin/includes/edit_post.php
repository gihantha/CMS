<?php

if (isset($_GET['p_id'])) {

    $the_post_id = $_GET['p_id'];
}
$query = "SELECT * FROM posts";
$select_all_post_by_id = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_all_post_by_id)) {
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
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="post_title">Post title</label>
        <input type="text" class="form-control" name="post_title" value="<?php echo $post_title ?>" />
    </div>

    <div class="form-group">
        <select name="post_category" id="post_category">
            <?php 
            $query = "SELECT * FROM categories";
            $select_categories = mysqli_query($connection, $query);
            
            confirmQuery($select_categories);

            while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_title = htmlspecialchars($row['cat_title']);
                $cat_id = htmlspecialchars($row['cat_id']);

                echo "<option value='{cat_id}'>$cat_title</option>";
            }
            
            ?>


        </select>
    </div>

    <div class="form-group">
        <label for="post_author">Post Author</label>
        <input type="text" class="form-control" name="post_author" value="<?php echo $post_author ?>" />
    </div>

    <div class="form-group">
        <label for="post_status"> Post Status</label>
        <input type="text" class="form-control" name="post_status" value="<?php echo $post_status ?>" />
    </div>

    <div class="form-group">
        <img width=100; src="../images/<?php echo $post_image; ?>" alt=""/>
        
    </div>

    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags" value="<?php echo $post_tags ?>" />
    </div>

    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" rows="10"
            cols="30"><?php echo $post_content ?></textarea>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Add Post">
    </div>
</form>