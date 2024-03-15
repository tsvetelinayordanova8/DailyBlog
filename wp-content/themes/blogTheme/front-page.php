<?php
get_header();
?>
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <img src="<?= get_template_directory_uri() ?>/img/books_slideshow1.jpg" style="width:155%; float:left">
    </div>

    <div class="mySlides fade">
        <img src="<?= get_template_directory_uri() ?>/img/books_slideshow2.jpg" style="width:155%; float:left">
    </div>

    <div class="mySlides fade">
        <img src="<?= get_template_directory_uri() ?>/img/books_slideshow3.jpg" style="width:155%; float:left">
    </div>

</div>
<section class="tm-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                <h2 class="tm-grey-text tm-title">
                    <?= get_option('hp_heading') ?>
                </h2>
                <p class="tm-subtitle">
                    <?= get_option('hp_sub_heading') ?>
                </p>
            </div>
        </div>


        <?php
        $args = [
            'cat' => 2,
            'posts_per_page' => 3

        ];
        $books = query_posts($args);
        ?>
        <h3 class="tm-grey-text tm-title">Фентъзи книги</h3>
        <div class="row">
            <?php
            for ($i = 0; $i < count($books); $i++):

                $txt = strip_tags($books[$i]->post_content);
                $txt = mb_substr($txt, 0, 110);
                $txt = trim($txt);

                $tryGetPostImg = get_the_post_thumbnail_url($books[$i]);
                $postImg = $tryGetPostImg === false
                    ? get_template_directory_uri() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'img-not-found.png'
                    : $tryGetPostImg;
                ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                    <div class="tm-content-box">
                        <img src="<?= $postImg ?>" alt="Book" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-grey-text">
                            <a href="<?= $books[$i]->guid ?>">
                                <?= $books[$i]->post_title ?>
                            </a>
                        </h4>
                        <p class="tm-margin-b-20">
                            <?= $txt; ?>
                        </p>
                        <a href="<?= $books[$i]->guid ?>" class="tm-btn text-uppercase">Detail</a>
                    </div>


                </div>
                <?php
            endfor;
            ?>
        </div> <!-- row -->

        <div class="row tm-margin-t-big">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="tm-2-col-left">

                    <h3 class="tm-grey-text tm-title">Да влезем в дълбокото</h3>
                    <img src="<?= get_template_directory_uri() ?>/img/book.jpg" alt="Image"
                        class="tm-margin-b-40 img-fluid">
                    <p>
                        <i>Никога не знаеш от какъв ужасен късмет те е предпазил лошият ти късмет. </i>
                        <br>
                        „Няма място за старите кучета“, Кормак Маккарти
                    </p>
                    <p>
                        <i>Който контролира миналото, контролира бъдещето. Който контролира настоящето, контролира
                            миналото. </i>
                        <br>
                        „1984“, Джордж Оруел
                    </p>
                    <p>
                        <i>Дори смъртта има сърце. </i>
                        <br>
                        „Крадецът на книги“, Маркъс Зюсак
                    </p>
                    <p>
                        <i>По-добре приеми истината, каквато и да е тя, отколкото да очакваш нещо друго, но лъжа!</i>
                        <br>
                        „Дон Кихот”, Мигел де Сервантес
                    </p>
                    <p>
                        <i>Не знам всичко, което предстои, но каквото и да е, ще го посрещна с усмивка.</i>
                        <br>
                        „Моби Дик“, Херман Мелвил
                    </p>
                    <a href="#" class="tm-btn text-uppercase">Read More</a>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                <div class="tm-2-col-right">

                    <div class="tm-2-rows-md-swap">
                        <div class="row tm-2-rows-md-down-1 tm-margin-t-mid">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <h3 class="tm-grey-text tm-title">
                                    Категории
                                </h3>
                                <?php
                                $categories = get_categories();
                                foreach ($categories as $category) {
                                    echo '<a id="category" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                                    echo '<br>';
                                }
                                ?>
                            </div> <!-- col -->
                        </div>

                        <?php
                        $args2 = [
                            'posts_per_page' => 3
                        ];
                        $related = query_posts($args2);
                        ?>
                        <div class="row tm-2-rows-md-down-1 tm-margin-t-mid">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <h3 class="tm-grey-text tm-title tm-margin-b-30">Последните постове</h3>
                                <?php
                                for ($i = 0; $i < count($related); $i++):

                                    $txt2 = strip_tags($related[$i]->post_content);
                                    $txt2 = mb_substr($txt2, 0, 110);
                                    $txt2 = trim($txt2);

                                    $tryGetPostImg2 = get_the_post_thumbnail_url($related[$i]);
                                    $postImg2 = $tryGetPostImg2 === false
                                        ? get_template_directory_uri() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'img-not-found.png'
                                        : $tryGetPostImg2;
                                    ?>

                                    <div class="media tm-related-post">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                                <img class="media-object" width="200px" height="130px" src="<?= $postImg2 ?>" alt="Related Post Image">
                                            </a>
                                        </div>
                                        <div class="media-body">

                                            <a href="<?= $related[$i]->guid ?>">
                                                <h4 class="media-heading tm-grey-text tm-margin-b-15">
                                                    <?= $related[$i]->post_title ?>
                                                </h4>
                                            </a>

                                            <p class="tm-small-font tm-media-description">
                                                <?= $txt2; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                endfor;
                                ?>
                        </div>
                    </div>

                </div>


            </div>
        </div> <!-- row -->

    </div>
</section>
<?php
get_footer();
?>