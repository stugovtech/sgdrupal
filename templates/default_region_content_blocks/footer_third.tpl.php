<ul class="menu">
  <li class="first leaf">
    <a href="<?php print (module_exists('token_filter') ? '[site:url]' : $GLOBALS['base_path']); ?>site-index"><span class="fa fa-list-ul" aria-hidden="true"></span>Site Index</a>
  </li>
  <li class="last leaf">
    <a href="<?php print (module_exists('token_filter') ? '[site:url]' : $GLOBALS['base_path']); ?>sitemap" title="Display a site map with RSS feeds."><span class="fa fa-sitemap" aria-hidden="true"></span>Site map</a>
  </li>
</ul>
