<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $id => $row): ?>
<div class="item<?php if ($id = 0) { print ' active';  } ?>">
  <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
    <a href="#"><?php print $row; ?></a>
  </div>
</div>
<?php endforeach; ?>
