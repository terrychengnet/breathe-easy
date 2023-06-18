<?php
$layout = get_field('layout');
$para = get_field('paragraph');
$des = get_field('description');
?>

<section class="section-paragraph">
      <div class="container container-narrow">
        <div class="<?= ($layout === 'Paragraph')?'para':'description';?>">
          <?php if($para):
            echo $para;
          endif;?>

          <?php if($des):
            echo $des;
          endif;?>
        </div>
      </div>
</section>