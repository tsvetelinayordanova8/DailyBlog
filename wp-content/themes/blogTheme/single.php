<?php
    get_header();
?>

<div class="container" style="margin: 5% 0 5% 0">
    <div class="row">
        <div class="col-md-12">
            <h2 style="margin: 5% 0;">
                <a href=""><?= get_the_title()?></a>
            </h2>
            <div>
                <?=get_the_content();?>
            </div>
        </div>
    </div>
</div>

<?php
     get_footer();
?>