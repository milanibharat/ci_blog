<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name">
</div>
<div class="form-group">
    <label>Zip Code</label>
    <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
</div>
<div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username">
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
</div>
<div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="cnfpassword" placeholder="Confirm Password">
</div>
<button type="submit" name="submit" class="btn btn-dark">Submit</button>
<?php echo form_close(); ?>
 