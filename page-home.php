<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

        <?php $idObj = get_category_by_slug('slider'); $id = $idObj->term_id;
        $n=4;
        $recent = new WP_Query("cat=$id&showposts=$n");?>
        <section class="top-slider">
            <div class="owl-carousel owl-slider">
                <?php while($recent->have_posts()) : $recent->the_post();?>
                <div class="owl-wrapper flex" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/img/slide-1.png)">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('описание'); ?></p>
                    <?php if(!empty(get_field('ссылка'))): ?>
                        <a class="more" href="<?php the_field('ссылка'); ?>"><?php the_field('текст_ссылки'); ?></a>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
        <?php  wp_reset_query(); ?>

        <div class="row home-items">
            <?php $idObj = get_category_by_slug('news'); $id = $idObj->term_id;
            $n=4;
            $recent = new WP_Query("cat=$id&showposts=$n");?>
            <div class="col-md-4 news">
                <h3 class="h3"><?php echo get_cat_name($id); ?></h3>
                <div class="owl-carousel owl-news">
                    <?php while($recent->have_posts()) : $recent->the_post();?>
                    <div class="wrapper">
                        <div class="row news--single">
                            <div class="col-md-4">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="col-md-8">
                                <p class="news--title"><?php echo mysql2date('l j F Y в H:i', $post->post_date );?></p>
                                <hr class="news--hr">
                                <p class="news--content"><?php echo substr( strip_tags(get_the_content()), 0, 100); echo '...'; ?> </p>
                                <a href="<?php the_permalink(); ?>" class="news--more pull-right">Подробнее...</a>
                            </div>
                            <hr class="news--hr">
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php  wp_reset_query(); ?>
            <div class="col-md-4 products">
                <h3 class="h3">Продукция</h3>
                <div class="wrapper">
                    <span href="#" class="shadow">
                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/product.png" alt="" class="img-responsive">
                        <div class="after"><a href="#">Информация о категории</a></div>
                    </span>
                </div>
            </div>
            <div class="col-md-4 services">
                <h3 class="h3">Сервис</h3>
                <div class="wrapper">
                    <span href="#" class="shadow">
                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/service.png" alt="" class="img-responsive">
                        <div class="after"><a href="#">Информация о категории</a></div>
                    </span>
                </div>
            </div>
        </div>

        <div class="row home-items">
            <div class="col-md-4 online align-center">
                <h3 class="h3">Онлайн-Лексикон Leitz</h3>
                <div class="wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/online.png" alt="" class="img">
                    <a class="more" href="#">далее к Онлайн-Лексикону</a>
                </div>
            </div>
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="col-md-8 about">
                <div class="about-wrapper">
                    <h3 class="about--h3"><?php the_title(); ?></h3>
                    <div class="about--p"><?php the_content(); ?></div>
                </div>
            </div>
            <?php endwhile; endif;?>
        </div>

<?php get_footer(); ?>

