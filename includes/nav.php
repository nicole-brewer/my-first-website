<?php
  foreach ($content as $page) {
    $path = ROOT.$page[file];
    $title = $page[title];
    echo "<a href=\"$path\" class=\"menu-item page\">$title</a>";
  }
?>
