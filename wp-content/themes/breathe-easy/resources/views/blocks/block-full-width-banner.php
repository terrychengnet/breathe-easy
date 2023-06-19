<?php
    $title = get_field('title');
    $thumbnail_img = get_field('thumbnail_image');
    $paragraph = get_field('paragraph');
    $link = get_field('link');
    $background_image = get_field('background_image');
?>

<section class="section-full-width-banner relative">
    <div class="container relative z-30">
        <div class="full-width-banner__wrap grid grid-cols-12">
            <!-- img -->
            <div class="relative z-20 thumbnail_img overflow-hidden rounded-[40px] h-[350px] md:h-auto
            col-span-10
            col-start-2
            md:col-span-4 
            md:col-start-2 
            ">
                <img class="w-full" src="<?php echo $thumbnail_img['url']; ?>"/>
            </div>
            <!-- content -->
            <div class="relative z-10 md:col-start-4 col-span-12 md:col-span-8 rounded-[40px] bg-blue-main grid 
            p-[40px] 
            lg:p-[80px] 
            pt-[80px]
            -mt-[10%] 
            md:-mt-[50%]
            ">
                <div class="md:w-3/5 justify-self-end">
                    <p class="quote mb-[40px]"><?php echo $paragraph; ?></p>
                    <?php if($link):?>
                        <a class="btn" href="<?php echo $link; ?>">Read More</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
        
    </div>
    <div class="full-width-banner__mask absolute z-20 top-0 left-0 right-0 bottom-[30%] bg-black/75"></div>
    <div class="full-width-banner__bg absolute z-10 top-0 left-0 right-0 bottom-[30%] bg-center bg-cover" style="background-image:url( <?php echo $background_image['url']; ?> )"></div>
</section>