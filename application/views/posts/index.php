<?php

require LAYOUT_PATH . 'header.php';
?>
    <h1><?php echo $PAGE_TITLE; ?></h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created At</th>
        </tr>
        </thead>
        <tbody>
		<?php foreach ( $posts as $post ): ?>
            <tr>
                <th scope="row"><?php echo $post['id']; ?></th>
                <th scope="row"><?php echo $post['title']; ?></th>
                <th scope="row"><?php echo $post['slug']; ?></th>
                <th scope="row"><?php echo $post['created_at']; ?></th>
            </tr>
		<?php endforeach; ?>
        </tbody>
    </table>

<?php

require LAYOUT_PATH . 'footer.php';

?>