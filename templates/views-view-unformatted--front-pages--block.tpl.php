<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $id => $row): ?>
  <div class="col-lg-3 col-xs-3 col-md-3 col-sm-3">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
