<?php
    $testimonials = get_field('testimonials'); 
 ?>

    <section class="section-testimonials">
      <div class="container">
        <?php if($testimonials): ?>
        <div class="testimonial-slider">
          <?php foreach( $testimonials as $testimonial ): 
            $name = $testimonial['customers_name'];
            $photoUrl = $testimonial['customers_photo']['url'];
            $tes = $testimonial['testimonial'];
            $rating = $testimonial['rating'];
            ?>
          <div class="tes-item">
            <div class="tes-wrap grid grid-cols-12 mx-[15px]">
              <div class="tes-container relative 
                col-span-12
                lg:col-span-8 
                lg:col-start-3
                bg-blue-second
                py-[40px]
                px-[30px]
                sm:px-[40px]
                pt-[100px]
                lg:pt-[40px]
                lg:px-[80px]
                mt-[105px]
                rounded-[35px]">
                <img class="w-[50px] sm:w-[67px] absolute top-[-85px] left-[40px] lg:left-[80px]" src="<?php echo get_template_directory_uri();?>/resources/images/quote-open.svg"/>
                <p class="block lg:hidden text-center text-[30px] text-blue-main font-bold mb-[25px]"><?php echo $name; ?></p>
                <p class="tes-quote quote mb-[30px] pr-0 lg:pr-[20%]">
                  <?php echo $tes;?>
                </p>
                <div class="tes-profile absolute 
                  top-[-100px] 
                  right-auto
                  left-1/2
                  transform 
                  -translate-x-1/2
                  lg:right-[-100px]
                  lg:left-auto
                  lg:transform-none
                  lg:translate-x-0">
                  <img class="block aspect-square rounded-[50%] w-[180px] lg:w-[230px] mb-[20px]" src="<?php echo $photoUrl;?>"/>
                  <p class="text-blue-main font-bold 
                  hidden
                  lg:block
                  text-[30px]
                  text-center
                  "><?php echo $name; ?></p>
                </div>
                <div class="tes-btm flex justify-between">
                  <div class="tes-rating">
                    <?php 
                    for ($x = 1; $x <= $rating; $x++) { ?>
                      <i class="fa-sharp fa-solid fa-star text-white text-[25px]"></i>    
                    <?php } ?>
                  </div>
                  <img class="w-[50px] sm:w-[67px]" src="<?php echo get_template_directory_uri();?>/resources/images/quote-close.svg"/>
                </div>
              </div>
            </div>
          </div>

          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </section>