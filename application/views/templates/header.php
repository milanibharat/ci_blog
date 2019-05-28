<html>
    <head>
        <title>CI Blog</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

        <script src="http://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>           
    </head>
    <body>
        <div class="bs-component">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="<?php echo base_url(); ?>" style="font-size: 15px;">ciBlog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>categories/index">Categories</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
                        <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
                        <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
                    </ul>

                </div>
            </nav>
        </div>
        <br />
        <div class="container">

