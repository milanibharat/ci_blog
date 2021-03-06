<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>

<div class="form-group">
    <div class='row'>
        <div class='col-md-4'>
            <img src="<?php echo base_url('assets/img/social-media-icons.jpg'); ?>" /><br>
        </div>
        <div class='col-md-8'>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Add Title">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" id="category_id" name="category_id">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category['id']; ?>">
                            <?php echo $category['name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                <input type="file" name="userfile" size="20">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </div>
</div>
</form>