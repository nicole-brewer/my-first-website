
<?php
  foreach ($modules as $module) {
    echo "<a href=\"$module->path\" class=\"menu-item page\">$module->name</a>";
  }
 ?>
