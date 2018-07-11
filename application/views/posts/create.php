<?php require LAYOUT_PATH . 'header.php'; ?>


<?php if (validation_errors()) : ?>
    <div class="alert alert-danger">
        <?php echo validation_errors() ?>
    </div>
<?php endif; ?>


<?php echo form_open('posts/create') ?>
    <div class="form-group">
        <label for="title">Title <span class="require">*</span></label>
        <input type="text" class="form-control" name="title"/>
    </div>


    <!--    <div class="form-group has-error">-->
    <!--        <label for="slug">Slug <span class="require">*</span>-->
    <!--            <small>(This field use in url path.)</small>-->
    <!--        </label>-->
    <!--        <input type="text" class="form-control" name="slug"/>-->
    <!--    </div>-->


    <div class="form-group">
        <label for="description">Body</label>
        <textarea rows="5" class="form-control" name="body"></textarea>
    </div>

    <div class="form-group">
        <p><span class="require">*</span> - required fields</p>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            Create
        </button>
    </div>

    </form>


<?php require LAYOUT_PATH . 'footer.php'; ?>