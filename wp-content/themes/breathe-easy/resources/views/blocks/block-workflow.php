<?php
    $header_title = get_field('header_title');
    $workflow_fields = get_field('workflow_fields');
    $cta_button = get_field('cta_button');
    $button_text = get_field('button_text');
    $button_link = get_field('button_link');
?>

<section class="section-workflow">
      <div class="container flex flex-col justify-center">
        <?php if($header_title): 
            
            ?>
            <h1 class="section-title mb-[4rem]">
                <?php echo $header_title;?>
            </h1>
        <?php endif; ?>
        <?php if ($workflow_fields): ?>
            <div class="grid grid-cols-1 md:grid-cols-3 mb-[2rem]">
                <?php foreach( $workflow_fields as $workflow_field ) {
                    $icon = $workflow_field['icon'];
                    $title = $workflow_field['title'];
                    $description = $workflow_field['description']; ?>
                    <div class="workflow_item relative text-center px-[2.5rem] mb-[6rem] md:mb-[3rem]">
                        <img class="block w-auto h-[120px] mx-auto mb-[1.5rem]" src="<?php echo $icon['url']; ?>"/>
                        <h4 class="text-blue-solid leading-[1.2] text-[1.5rem] mb-[1rem]"><?php echo $title; ?></h4>
                        <p><?php echo $description; ?></p>
                    </div>
                <?php } ?>
            </div>
        <?php endif; ?>
        <?php if($cta_button): ?>
            <a class="btn mx-auto mb-[2rem]" href="<?php echo $button_link ?>">
                <?php echo $button_text; ?>
            </a>
        <?php endif; ?>
      </div>
</section>