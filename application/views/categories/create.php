<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
<div class="form-group">
    <div class='row'>
        <div class='col-md-6'>
            <img src="<?php echo base_url('assets/img/categories.jpg'); ?>" /><br>
        </div>
        <div class='col-md-6'>
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name"><br>
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
        
    </div>
</div>
</form>