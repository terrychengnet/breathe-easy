<?php
    $tl_title = get_field('title');
    $timeline_items = get_field('timeline');
    $cta_text = get_field('cta_button_text');
    $cta_link = get_field('cta_button_link');
?>

<!-- Timeline Module -->
    <section class="section-timeline">
      <div class="container">
        <?php if($tl_title): ?>
            <h1 class="section-title relative"><?php echo $tl_title; ?></h1>
        <?php endif; ?>
        <div class="timeline-body relative">
            <?php
                if( $timeline_items ):
                    $count = 0;
                    foreach( $timeline_items as $key=>$timeline_item ):
                        ++$count;
                        $index = $key+1;
                        $title = $timeline_item['title'];
                        $content = $timeline_item['content'];
                        $link = $timeline_item['link'];
                        $img_url = $timeline_item['thumbnail_image']['url'];
                        ?>
                        <div class="timeline__item relative z-20 grid grid-cols-12 gap-1 mb-[60px]">
                            <div class="timeline__content-wrap pt-[20px] md:pt-[40px] flex
                            col-span-7
                            col-start-6
                            sm:col-span-6
                            sm:col-start-7
                            md:col-span-5
                                <?php if($count%2) { ?>
                                    order-2 
                                    md:order-1
                                <?php } else { ?>
                                    md:col-start-8 
                                    order-2
                                <?php } ?>
                                ">
                                <div class="self-center">
                                    <h3 class="section-heading mb-[25px] text-blue-main"><?php echo $title; ?>
                                        <span class="timeline-dot hidden sm:block absolute top-[50%] 
                                        left-[-17%]
                                        md:left-0
                                        right-0"></span>
                                    </h3>
                                    <p class="description mb-[25px]">
                                        <?php echo $content;?>
                                    </p>
                                    <?php if($link): ?>
                                        <a class="btn" href="<?php echo $link; ?>">Read More</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="timeline__img-wrap block relative mb-5 sm:mb-0
                            col-span-4
                            md:col-span-5
                            <?php if($count%2) { ?>
                                md:col-start-8
                                order-1 
                                md:order-2
                            <?php } ?>
                            ">
                            <div class="timeline__img flex relative z-10 place-content-center rounded-[40px] aspect-square overflow-hidden">
                                <span class="timeline__num absolute z-10 text-white font-bold text-[100px] md:text-[200px] self-center opacity-0"><?php echo $index; ?></span>
                                <div class="hero-bg-mask absolute z-0 top-0 left-0 right-0 bottom-0 bg-grey-dark/50"></div>
                                <img class="object-cover w-full" src="<?php echo $img_url;?>"/>
                            </div>
                            <div class="timeline__img-shade absolute left-0 right-0 top-[35px] sm:top-[50px] md:top-[80px] aspect-square bg-grey rounded-[30px] sm:round-[30px] md:rounded-[40px] m-[20px] sm:m-[30px] md:m-[40px]"></div>
                            </div>
                        </div>
                    <?php endforeach;
                endif;
            ?>
          
            <!-- Timeline -->
            <div class="timeline absolute z-0 top-0 left-0 right-0 bottom-0 p-[50px]">
                <span class="default-line absolute w-[5px] h-[100%] bg-grey 
                left-[16%] 
                sm:left-[41%] 
                translate-x-[0]
                md:left-[50%]
                md:translate-x-[-50%]"></span>
                <span class="draw-line absolute w-[5px] h-[0] bg-grey-dark 
                left-[16%] 
                sm:left-[41%] 
                translate-x-[0]
                md:left-[50%]
                md:translate-x-[-50%]"></span>
            </div>
        </div>
        <?php if ($cta_link): ?>
            <div class="md:text-center pt-[5rem]">
                <a class="inline-block btn mx-auto" href="<?php echo $cta_link ?>">
                    <?php echo $cta_text; ?>
                </a>
            </div>
        <?php endif; ?>
      </div>
    </section>