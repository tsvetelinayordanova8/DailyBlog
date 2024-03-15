<?php
wp_enqueue_media();
?>
<div class="wrap">
    <h3>Home Page Header Settings</h3>
    <form action="options.php" method="post">
        <?php
        settings_fields('hpg');
        ?>
        <label>Heading</label>
        <input value="<?= get_option('hp_heading') ?>" type="text" name="hp_heading" placeholder="Heading"><br> <br>
        <label>Sub heading</label>
        <input value="<?= get_option('hp_sub_heading') ?>" type="text" name="hp_sub_heading"
            placeholder="Sub Heading"><br> <br>

        <button id="uploadLogo" class="btn btn-secondary">Upload Logo</button>

        <img src="<?=get_option('logo')?>" id="logoImage" style="width:20%;" class="img-responsive">
        <input value="<?=get_option('logo')?>" type="hidden" name="logo" id="logo">
        <?= submit_button() ?>
    </form>
</div>
<script>
        jQuery(document).ready(function ($) {
            var mediaUploader;
            $('#uploadLogo').click(function (e) {
            e.preventDefault();
            if (mediaUploader){
                mediaUploader.open();
                return;
            }
    mediaUploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose Header Picture',
        button: {
            text: 'Choose Picture'
        },
        multiple:false
    });
    
    mediaUploader.on('select', function () {
        attachment = mediaUploader.state().get('selection').first().toJSON();
        $('#logoImage').attr('src', attachment.url);
        $('#logo').val(attachment.url);
        //$('#sliderImageOne').val(attachment.url);
        //$('#headerImageShow').attr('src', attachment.url);
    });
        mediaUploader.open();
    });
});   
</script>