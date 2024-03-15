<?php
get_header();
function getPostCategoriesAsString($categories)
{
    $tmpArray = [];
    foreach ($categories as $category) {
        $tmpArray[] = $category->name;
    }
    var_dump(' ,', $tmpArray);
}
?>
<div class="container">
<?php
while (have_posts()):
    the_post();

    ?>

        <div class="col-md-12" style="margin-bottom: 5%;">
            <div class="entry">
                <img src="<?= get_the_post_thumbnail_url() ?>" alt="Image" class="tm-margin-b-20 img-fluid" width="800px">
                <h4 class="tm-margin-b-20 tm-grey-text">
                    <a href="<?= post_permalink(); ?>"><?= get_the_title() ?></a>
                </h4>
                <div>
                    <?php
                    $content = get_the_content();
                    $clearContent = strip_tags($content);
                    $finalContent = substr($clearContent, 0, 440);
                    ?>
                    <?= $finalContent ?>...
                </div>
                <a href="<?= post_permalink(); ?>" class="tm-btn text-uppercase" style="margin-top:1%;">Read More</a>
            </div>

        </div>
        

<?php
endwhile;
?>
</div>


<?php
get_footer();
?>