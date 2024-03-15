<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?= bloginfo('name') ?>
    </title>
    <!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/bootstrap.min.css"> <!-- Bootstrap style -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/templatemo-style.css">
    <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    <?php
    wp_head();
    ?>
    <script src="https://kit.fontawesome.com/34c5c036a5.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="tm-header">
        <div class="container-fluid">
            <div class="tm-header-inner">
                <a href="#" class="navbar-brand tm-site-name">
                    <img src="<?=get_option('logo')?>" alt="LogoImage" style="max-width: 180px;margin-bottom:0;display: inline-block;">
                    <h1 class="tm-grey-text tm-title" style="display: inline-block;">Daily Blog</h1>
                </a>

                <!-- navbar -->
                <nav class="navbar tm-main-nav">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse"
                        data-target="#tmNavbar">
                        &#9776;
                    </button>

                    <?php
                    $settings = [
                        'theme_location' => 'main-menu',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-toggleable-sm',
                        'container_id' => 'tmNavbar',
                        'menu_class' => 'nav navbar-nav',
                        'list_item_class' => 'nav-item',
                        'link_class' => 'nav-link'
                    ];
                    wp_nav_menu($settings);
                    ?>
                </nav>


            </div>
        </div>
    </div>

    <br>