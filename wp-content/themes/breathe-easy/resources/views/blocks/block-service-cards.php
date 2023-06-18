 <?php
    $title = get_field('title');
    $cards = get_field('cards');
 ?>
 <section class="section-service-cards">
      <div class="container">
        <?php if($title): ?>
            <h1 class="section-title"><?php echo $title; ?></h1>
        <?php endif; ?>
        <div class="timeline-body cards-body relative">
        <?php
            if( $cards ):
                $count = 0;
                foreach( $cards as $key=>$card ):
                    ++$count;
                    $title = $card['title'];
                    $content = $card['content'];
                    $link = $card['link'];
                    $img_url = $card['thumbnail_image']['url'];
                    ?>
                    <div class="timeline__item relative z-20 grid grid-cols-12 gap-1 mb-[60px]">
                        <div class="timeline__content-wrap pt-[20px] md:pt-[40px]
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
                          <h2 class="section-heading mb-[25px]">
                            <?php echo $title; ?>
                          </h2>
                          <p class="description mb-[25px]">
                              <?php echo $content;?>
                          </p>
                          <?php if($link): ?>
                            <a class="btn" href="<?php echo $link; ?>">Read More</a>
                          <?php endif; ?>
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
                            <img class="" src="<?php echo $img_url;?>"/>
                        </div>
                        <div class="timeline__img-shade absolute left-0 right-0 top-[35px] sm:top-[50px] md:top-[80px] aspect-square bg-grey rounded-[30px] sm:round-[30px] md:rounded-[40px] m-[20px] sm:m-[30px] md:m-[40px]"></div>
                        </div>
                    </div>
                <?php endforeach;
            endif;
        ?>
        </div>
        </div>
      </div>
    </section>