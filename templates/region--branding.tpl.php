<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php if ($site_name || $site_slogan): ?>

        <?php if ($show_isu_nameplate): ?>
            <?php if (theme_get_setting('default_logo')): ?>
              <a id="isu_header_wordmark" href="<?php print $level_1_url; ?>" title="Iowa State University Homepage"><img src="<?php print $wordmark_image; ?>" alt="<?php print $wordmark_alt_text; ?>"></a>
            <?php else: ?>
              <a id="isu_header_wordmark" href="<?php print $level_1_url; ?>" title="<?php print $site_name; ?>"><img src="<?php print $wordmark_image; ?>" alt="<?php print $wordmark_alt_text; ?>"></a>
            <?php endif; ?>
        <?php endif; ?>

        <?php if ($suitcase_interim_config_header_type == 1 || $suitcase_interim_config_header_type == 2): ?><?php /* We show the dept name for cases 1 & 2 */ ?>
          <?php if ($suitcase_interim_config_header_type == 2 && $is_front): ?>
            <h1 class="site-name-level-2"><?php print $linked_site_name_level_2; ?></h1>
          <?php else: ?>
            <span class="site-name-level-2"><?php print $linked_site_name_level_2; ?></span>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($suitcase_interim_config_header_type == 1 || $suitcase_interim_config_header_type == 3): ?><?php /* We show the lab name for cases 1 & 3 */?>
          <hr>
          <div class="site-name-slogan">
            <?php if ($is_front): ?>
              <h1 class="site-name-level-3"><?php print $linked_site_name_level_3; ?></h1>
            <?php else: ?>
              <span class="site-name-level-3"><?php print $linked_site_name_level_3; ?></span>
            <?php endif; ?>
          </div>
        <?php endif; ?>

    <?php endif; ?>
    <?php print $content; ?>
  </div>
</div>
