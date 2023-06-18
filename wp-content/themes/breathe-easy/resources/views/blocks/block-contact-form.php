<?php
$info = get_field('contact_info', 'option');
$whatsapp = $info['whatsapp_number'];

$title = get_field('title');
$paragraph = get_field('paragraph');
$para_whatsapp = get_field('paragraph_for_whatsapp');
?>
<section class="section-contact bg-blue-main py-[95px]">
  <div class="container">
    <div class="grid grid-cols-12">
      <div class="
        col-span-12
        lg:col-span-4
        mb-[80px]
        lg:mb-0">
        <h1 class="text-white leading-[1.1] mb-[30px] md:mb-[70px]">
          <?php echo $title;?>
        </h1>
        <p class="text-white text-[20px] md:text-[25px] font-[300] leading-[1.3]">
          <?php echo $paragraph; ?>
        </p>
        <?php if($para_whatsapp):?>
          <div class="form-line-break relative text-center">
            <span class="relative z-10 inline-block text-white text-[40px] font-bold bg-blue-main p-[25px] mx-auto">OR</span>
            <span class="form__white-line 
              absolute
              left-0
              right-0
              top-1/2 
              transform 
              -translate-y-1/2
              w-full 
              h-[2px] 
            bg-white
            "></span>
          </div>
          <p class="text-white text-[20px] md:text-[25px] font-[300] leading-[1.3] mb-[20px]">
            <?php echo $para_whatsapp; ?>
          </p>
          <p class="flex">
            <i class="fa-brands fa-whatsapp text-white text-[40px] mr-4"></i>
            <span class="text-white font-bold text-[25px] self-center"><?php echo $whatsapp ?></span>
          </p>
        <?php endif; ?>
      </div>
        <div class="
          col-span-12
          lg:col-span-5
          lg:col-start-7">
        <form class="contact-form">
          <input class="form-input" type="text" name="name" placeholder="Name*"/>
          <input class="form-input" type="text" name="phone" placeholder="Phone number*"/>
          <input class="form-input" type="email" name="email" placeholder="E-mail*"/>
          <textarea class="form-input
          min-h-[250px]
          text-[25px]
          border-t-[2px]
          border-r-[2px]
          border-l-[2px]
          py-[15px]
          px-[20px]
          my-[50px]
          rounded-[35px]
          " name="form-message" form="usrform"  placeholder="Message"></textarea>
          <input class="btn btn-submit form-submit" type="submit" value="Send">
        </form>
      </div>
    </div>
  </div>
</section>