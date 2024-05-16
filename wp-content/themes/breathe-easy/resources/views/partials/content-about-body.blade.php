@php
$title = get_field('title');
$content = get_field('content');
$about_photo = get_field('about_photo');
$core_values_title = get_field('core_values_title');
$statement = get_field('statement');
@endphp

<section>
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-3">
            <div class="about-info md:col-span-2 lg:pr-[8rem]">
                <?php if($title): ?>
                    <h2 class="text-[2.5rem] text-blue-solid mb-[2rem]"><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if($content): ?>
                <div class="para">
                    <?php echo $content; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="about-photo">
                <?php if($about_photo): ?>
                    <img class="w-full" src="<?php echo $about_photo['url']; ?>" src="About Breathe Easy"/>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php if($statement): ?>
<section>
    <div class="container">
        <?php if($core_values_title): ?>
            <h2 class="mb-[2rem] text-[#b0b0b0] "><?php echo $core_values_title; ?></h2>
        <?php endif; ?>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-[2rem]">
            <?php foreach( $statement as $statement_item ) {
                $title = $statement_item['title'];
                $content = $statement_item['content']; ?>
                <div class="statement_item mb-[1.5rem] md:mb-[3rem]">
                    <h4 class="text-blue-solid text-[2rem] mb-[1rem]"><?php echo $title; ?></h4>
                    <p><?php echo $content; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php endif; ?>