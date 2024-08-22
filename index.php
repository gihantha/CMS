
<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>


<body>

    <!-- Navigation -->
    <?php include "includes/navigation.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                 <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
                

                <?php 
                
                $query = "SELECT * FROM posts";
                $select_all_posts_query = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_posts_query)){
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_content = $row['post_content'];
                    $post_image = $row['post_image'];
                    $post_tags = $row['post_tags'];

               
                ?>

                    <!-- echo "<h2> <a href='#'>{$post_title}</a></h2>";
                    echo "<p class='lead'>by <a href='index.php'>{$post_author}</a></p>";
                    echo "<p><span class='glyphicon glyphicon-time'></span> Posted on {$post_date} at 10:00 PM</p><hr>";
                    echo "<img class='img-responsive' src='http://placehold.it/900x300' alt=''><hr>";
                    echo "<p>{$post_content}</p>";
                    echo "<a class='tn btn-primary' href='#'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>"; -->
                
                
                First Blog Post
                <h2>
                    <a href="#"><?php $post_title?></a>
                </h2> 
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?>at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image ?>" style="width:200vh; height:90vh" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
            <?php } ?>
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php";?>

        </div>
        <!-- /.row -->

        <hr>

        <?php 
        
        include "includes/footer.php";
        
        ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
