<?php

require LAYOUT_PATH . 'header.php';
?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>
        <p class="blog-post-meta"><?php echo $post['created_at']; ?>
            <!--            by <a href="#">Mark</a>-->
        </p>
        <p><?php echo $post['body']; ?></p>

        <!--        todo add category -->
        <!--        <a class="badge badge-dark" href="-->
        <?php //echo site_url( '/posts' ) . '?slug=' . $post['slug']; ?><!--">-->
        <!--            <strong-->
        <!--                    class="d-inline-block mb-2 text-primary">-->
        <?php //echo $post['slug']; ?><!--</strong></a>-->
    </div>
<?php

require LAYOUT_PATH . 'footer.php';

?>