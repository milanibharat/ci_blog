<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?> </small><br />
<img class="post-thumb1" src="<?php echo base_url('assets/images/posts/'.$post['post_image']);?>">
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>

<a class="btn btn-dark pull-left" href="<?php echo base_url(); ?>PostsController/edit/<?php echo $post['slug']; ?>">Edit</a><br><br>
<?php echo form_open('/PostsController/delete/' . $post['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>

