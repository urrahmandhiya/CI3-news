<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
    <label for="title">Title News</label>
    <input type="text" name="title" /> <br />

    <label for="text"></label>
    <textarea name="text"></textarea> <br />

    <input type="submit" name="submit" value="Create News Item" />

</form>

