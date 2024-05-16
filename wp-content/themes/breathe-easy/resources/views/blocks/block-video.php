<?php
    $video_title = get_field('video_title');
    $video_img = get_field('video_thumbnail_image');
    $youtube_link = get_field('youtube_link');
?>

<section class="section-video">
      <div class="container container-narrow">
        <?php if($video_title): ?>
            <h1 class="section-title">
                <?php echo $video_title;?>
            </h1>
        <?php endif; ?>
        <?php if ($youtube_link): ?>
            <a class="block relative group mx-auto md:w-2/3" href="<?php echo $youtube_link; ?>" data-lity>
                <img class="w-full" src="<?php echo $video_img['url']; ?>" alt="<?php echo $video_title; ?>"/>
                <div class="video_mask absolute top-0 right-0 bottom-0 left-0 transition-all bg-blue-light/50 group-hover:bg-blue-light/40">
                    <i class="fa-solid fa-circle-play absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  text-blue-light transition-all text-[80px] group-hover:text-[95px]"></i>
                </div>
            </a>
        <?php endif; ?>
      </div>
</section>