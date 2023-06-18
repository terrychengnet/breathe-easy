<?php
$layout = get_field('layout');
$quote = get_field('quote');
?>

<section class="section-quote">
      <div class="container container-narrow">
        <div class="quote-wrap relative rounded-[40px] py-[65px] px-[100px] <?= ($layout === 'Default')?'':'bg-blue-second';?>">
            <span class="quote-open absolute top-[10px] left-[20px] w-[40px] h-[40px] font-sans text-[180px] leading-[1] <?= ($layout === 'Default')?'text-blue-second':'text-white';?>">&ldquo;</span>
                <div class="quote-content <?= ($layout === 'Default')?'text-blue-second':'text-white';?>">
                    <h2><?php echo $quote; ?></h2>
                </div>
            <span class="quote-close absolute right-[40px] bottom-[-40px] w-[40px] h-[40px] font-sans text-[180px] leading-[0] <?= ($layout === 'Default')?'text-blue-second':'text-white';?>">&rdquo;</span>
        </div>
      </div>
</section>