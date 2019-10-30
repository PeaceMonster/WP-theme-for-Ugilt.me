<html>
<head>
    <title><?php echo get_bloginfo(' name ')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <script src="https://kit.fontawesome.com/a40bb4f708.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="header" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/pics/forsideback.jpg');">
            <div class="title">
                <h1><a style="text-decoration: none; color: white;" href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo(' name ');?></a></h1>
                <p><?php echo get_bloginfo( 'description' ); ?></p>
            </div>
        </div>