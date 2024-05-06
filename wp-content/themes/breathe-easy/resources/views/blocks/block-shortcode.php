<?php
    $title = get_field('shortcode_title');
    $shortcode = get_field('shortcode');
?>

<section class="section-shortcode mt-[1rem]">
    <div class="container">
        <?php if($title): ?>
            <h1 class="section-title mt-[15px]"><?php echo $title ?></h1>
        <?php endif; ?>
        <?php echo $shortcode ?>
    </div>
</section>