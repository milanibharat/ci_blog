<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Foundation for Sites</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <style type='text/css'>
            body{
                background-image: url("<?php echo base_url(); ?>assets/img/1.jpg") !important;
            }
            h1{
                font-family: Microsoft Yi Baiti !important;
                font-size: 50px;
                text-align:center;
                color:#343131;
            }
            h3{
                font-family: Microsoft Yi Baiti !important;
                font-size: 30px;
                text-align:center;
                color:#343131;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class='row'>
                <div class='col-sm-12 col-md-6 col-lg-6'>
                    <h1>Blogging System Using Php MVC CodeIgniter</h1>
                    <div class='row'>
                        <div class='col-sm-12 col-md-9 col-lg-9'>
                            <h3>Sign In</h3>
                            <?php echo form_open('welcome/signin'); ?>
                            <div class='row'>
                                <div class='col-sm-12 col-md-12 col-lg-12'>
                                    <?php echo form_input(['name' => 'email', 'placeholder' => 'email ', 'class' => 'textbox']); ?>
                                </div>
                                <div class='col-sm-12 col-md-12 col-lg-12'>
                                    <?php echo form_password(['name' => 'password', 'placeholder' => 'Password ', 'class' => 'textbox']); ?>
                                </div>
                                <?php echo form_submit(['name' => 'submit', 'value' => 'Sign In', 'class' => 'hollow button secondary textbox']); ?>
                                <?php echo form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'hollow button secondary textbox']); ?>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>


                <div class='col-sm-12 col-md-6 col-lg-6'>
                    <h3>Register</h3>
                    <?php echo form_open('welcome/signup'); ?>
                    <div class='row'>
                        <div class='col-sm-12 col-md-12 col-lg-12'>
                            <?php echo form_input(['name' => 'username', 'placeholder' => 'Username', 'class' => 'textbox']); ?>
                            <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class='col-sm-12 col-md-12 col-lg-12'>
                            <?php echo form_input(['name' => 'email', 'placeholder' => 'Email', 'class' => 'textbox']); ?>
                            <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class='col-sm-12 col-md-12 col-lg-12'>
                            <?php echo form_input(['name' => 'password', 'placeholder' => 'Password', 'type' => 'password', 'class' => 'textbox']); ?>
                            <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class='col-sm-12 col-md-12 col-lg-12'>
                            <?php echo form_input(['name' => 'mobile', 'placeholder' => 'Mobile', 'class' => 'textbox']); ?>
                            <?php echo form_error('mobile', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class='col-sm-12 col-md-12 col-lg-12'>
                            <?php echo form_submit(['name' => 'submit', 'value' => 'Sign Up', 'class' => 'hollow button secondary textbox']); ?>
                            <?php echo form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'hollow button secondary textbox']); ?>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>


    </body>
</html>
