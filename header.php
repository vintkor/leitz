<!--
  __  __            _  _          ____                   _
 |  \/  |          | |(_)        / __ \                 (_)
 | \  / |  ___   __| | _   __ _ | |  | | _ __    ___     _  _ __     _   _   __ _
 | |\/| | / _ \ / _` || | / _` || |  | || '_ \  / _ \   | || '_ \   | | | | / _` |
 | |  | ||  __/| (_| || || (_| || |__| || | | ||  __/ _ | || | | | _| |_| || (_| |
 |_|  |_| \___| \__,_||_| \__,_| \____/ |_| |_| \___|(_)|_||_| |_|(_)\__,_| \__,_|
-->

<!DOCTYPE html>
<html lang="<?php echo get_bloginfo('language'); ?>">

<head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('&#8594;', true, 'right'); echo get_bloginfo('name');?> - <?php echo get_bloginfo('description') ?></title>
    <?php wp_head(); ?>
    <!-- build:css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/libs.css">
    <!-- endbuild -->
    <!-- build:css2 -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/main.css">
    <!-- endbuild -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body <?php body_class(); ?>>

    <div class="container">

        <section class="top-header">
            <div class="row flex">
                <div class="col-md-2">
                    <ul>
                        <li><a href="#">Укр</a></li>
                        <li class="active"><a href="#">Рус</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <p>www.leitz.org</p>
                </div>
                <div class="col-md-8 align-right">
                    <form class="">
                        <input type="text" name="search" placeholder="Введите текст...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </section>

        <header>
            <div class="row flex">
                <div class="col-md-2">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/logo.png" alt="" class="img-responsive logo">
                    </a>
                    <p class="slogan">Просто краще</p>
                </div>
                <div class="col-md-7">
                    <h1>ЛЕЙТЦ ІНСТРУМЕНТИ УКРАЇНА</h1>
                </div>
                <div class="col-md-3">
                    <p class="phone"><i class="fa fa-phone" aria-hidden="true"></i> 0 800 123 123</p>
                    <p class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i> www-info@leitz.com.ua</p>
                    <button>Заказать звонок</button>
                </div>
            </div>
        </header>

        <nav>
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="#">SomeItem2</a></li>
                        <li><a href="#">SomeItem3</a>
                            <ul>
                                <li><a href="#">childItem-1</a></li>
                                <li><a href="#">childItem-2 childItem</a></li>
                                <li><a href="#">childItem-3</a></li>
                                <li><a href="#">Обработка плоских поверхностей</a></li>
                                <li><a href="#">childItem-4</a></li>
                                <li><a href="#">childItem-5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">SomeItem4</a></li>
                        <li><a href="#">SomeItem5</a></li>
                        <li><a href="#">SomeItem6</a></li>
                        <li><a href="#">SomeItem1</a></li>
                    </ul>
                </div>
            </div>
        </nav>