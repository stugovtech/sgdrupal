<<?php print $layout_wrapper; print $layout_attributes; ?> class="media media_card <?php print $classes;?>">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if (!empty($content['media_left'])): ?>
    <<?php print $media_left_wrapper ?> class="media-left <?php print $media_left_classes; ?>">
      <?php print $content['media_left']; ?>
    </<?php print $media_left_wrapper ?>>
  <?php endif; ?>

  <div class="media-body">
    <?php if (!empty($content['media_heading'])): ?>
      <<?php print $media_heading_wrapper ?> class="media-heading <?php print $media_heading_classes; ?>">
        <?php print $content['media_heading']; ?>
      </<?php print $media_heading_wrapper ?>>
    <?php endif; ?>

    <?php if (!empty($content['media_body'])): ?>
      <<?php print $media_body_wrapper ?> class="media-content <?php print $media_body_classes; ?>">
        <?php print $content['media_body']; ?>
      </<?php print $media_body_wrapper ?>>
    <?php endif; ?>
  </div>

</<?php print $layout_wrapper ?>>