<?php
    get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>
                <a href=""><?= get_the_title()?></a>
            </h2>
            <div>
                <?=get_the_content();?>
            </div>
        </div>
        <div class="col-md-4" id="rightsidebar">
            <?php
                dynamic_sidebar('sidebar');
            ?>
        </div>
    </div>
</div>

<?php
     get_footer();
?>