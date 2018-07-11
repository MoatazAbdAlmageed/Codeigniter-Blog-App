<?php

require LAYOUT_PATH . 'header.php';
?>
    <h1>Posts</h1>

<?php foreach ($posts as $post): ?>


    <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">

            <!--todo add category -->
            <!--            <a href="-->
            <?php //echo base_url('index.php/posts') . '?slug=' . $post['slug']; ?><!--"> <strong-->
            <!--                        class="d-inline-block mb-2 text-primary">-->
            <?php //echo $post['slug']; ?><!--</strong></a>-->

            <h3 class="mb-0">
                <a class="text-dark"
                   href="<?php echo site_url('posts/') . $post['slug']; ?>"><?php echo $post['title']; ?></a>
            </h3>
            <div class="mb-1 text-muted"><?php echo $post['created_at']; ?></div>
            <p class="card-text mb-auto"><?php echo $post['body']; ?></p>
            <a class="btn btn-sm btn-outline-primary float-right"
               href="<?php echo site_url('posts/') . $post['slug']; ?>">Continue reading</a>
        </div>

        <!--        todo add Thumbnail -->
        <!--        <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb"-->
        <!--             alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"-->
        <!--             src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16487690012%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16487690012%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2255.609375%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"-->
        <!--             data-holder-rendered="true">-->
    </div>


<?php endforeach; ?>


    <!-- <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created At</th>
        </tr>
        </thead>
        <tbody>
		<?php /*foreach ( $posts as $post ): */ ?>
            <tr>
                <th scope="row"><?php /*echo $post['id']; */ ?></th>
                <th scope="row"><?php /*echo $post['title']; */ ?></th>
                <th scope="row"><?php /*echo $post['slug']; */ ?></th>
                <th scope="row"><?php /*echo $post['created_at']; */ ?></th>
            </tr>
		<?php /*endforeach; */ ?>
        </tbody>
    </table>-->

<?php

require LAYOUT_PATH . 'footer.php';

?>