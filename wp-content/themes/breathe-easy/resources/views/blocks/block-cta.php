<?php
    $cta_thumbnail = get_field('cta_thumbnail_image');
    $cta_heading_title = get_field('cta_heading_title');
    $cta_paragraph = get_field('cta_paragraph');
    $cta_button_text = get_field('cta_button_text');
    $cta_button_link = get_field('cta_button_link');
?>

<section class="section-cta">
    <div class="container">
        <div class="grid md:grid-cols-2">
            <div class="cta-info flex flex-col justify-center pr-[3rem] order-2 md:order-1">
                <?php if($cta_heading_title): ?>
                <h2 class="section-heading text-blue-solid mb-[1rem]">
                    <?php echo $cta_heading_title; ?>
                </h2>
                <?php endif; ?>
                <?php if($cta_paragraph): ?>
                    <div class="mb-[2rem] md:mb-[3rem]">
                        <?php echo $cta_paragraph; ?>
                    </div>
                <?php endif; ?>
                <?php if($cta_button_link): ?>
                    <div class="btn-wrap">
                        <a class="inline-block btn mb-[2rem]" href="<?php echo $cta_button_link ?>">
                            <?php echo $cta_button_text; ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="cta-thumbnail order-1 md:order-2">
                <?php if($cta_thumbnail): ?>
                    <img class="mb-[1rem] md:mb-0" src="<?php echo $cta_thumbnail['url'];?>"/>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>