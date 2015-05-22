<?php /** * @file */ ?>
<?php
global $theme_key;
$theme_path=drupal_get_path( 'theme', $theme_key);

function af_print_node($current_nid) {
  $current_node=node_load( $current_nid );
  $current_body=reset( $current_node->body );
  $current_node_view = $current_body[0]['safe_value'];
  print $current_node_view; }
?>
<div id="header">
  <div id="language">
    <a href="en" id="lang-en"></a>
    <a href="ka" id="lang-ka"></a> <img src="<?php print $theme_path.'/images/'.$language->language;?>.jpg" />
  </div>
  <a href="#news" id="front-link-news" class="front-links"></a>
  <a href="#who-we-are" id="front-link-whoweare" class="front-links"></a>
  <a href="#programs" id="front-link-program" class="front-links"></a>
  <a href="#gallery" id="front-link-gallery" class="front-links"></a>
  <a href="#howtoapply" id="front-link-howtoapply" class="front-links"></a>
  <a href="#contact" id="front-link-contact" class="front-links"></a>
  <a href="#students" id="front-link-students" class="front-links"></a> <img src="<?php print $theme_path;?>/images/logo.png" id="logo" alt="Art Factory" />
  <div id="gif">
    <img src="<?php print $theme_path;?>/images/animation.gif" alt="Art Factory" id="front-menu" /> <img src="<?php print $theme_path;?>/images/bgfaade.png" alt="" />
  </div>
</div>
<div class="main-container <?php print $container_class; ?>">
  <div id="news" class="row"></div>
  <div id="who-we-are" class="row">
    <div class="col-md-12">
      <h3><?php print t("Who we are"); ?></h3>
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#about" data-toggle="tab" tab-name="about"><?php print t( "About");?></a></li>
          <li><a href="#admin" data-toggle="tab" tab-name="admin"><?php print t( "Administration");?></a></li>
          <li><a href="#lectur" data-toggle="tab" tab-name="lectur"><?php print t( "Lecturers");?></a></li>
        </ul>
      </div>
      <div class="tab-content col-md-9">
        <div class="tab-pane active" id="about">
          <?php $tid=reset(taxonomy_get_term_by_name( 'About Us', 'type'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'info_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
        <div class="tab-pane " id="admin">
          <?php $tid=reset(taxonomy_get_term_by_name( 'Administration', 'category'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'people_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
        <div class="tab-pane " id="lectur">
          <?php $tid=reset(taxonomy_get_term_by_name( 'Lecturer', 'category'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'people_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
      </div>
    </div>
  </div>
  <div id="programs" class="row">
    <div class="col-md-12">
      <h3><?php print t("Programs"); ?></h3>
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#1year" data-toggle="tab" tab-name="1year"><?php print t( "1 Year");?></a></li>
          <li><a href="#144_hours" data-toggle="tab" tab-name="144_hours"><?php print t( "144 Hours");?></a></li>
          <li><a href="#summer_camp" data-toggle="tab" tab-name="summer_camp"><?php print t( "Summer Camp");?></a></li>
          <li><a href="#bachelor" data-toggle="tab" tab-name="bachelor"><?php print t( "Bachelor");?></a></li>
          <li class="disabled" data-toggle="tab" tab-name="master"><a href="#master"><?php print t( "Master");?></a></li>
        </ul>
      </div>
      <div class="tab-content col-md-9">
        <div class="tab-pane active" id="1year">
          <?php $tid=reset(taxonomy_get_term_by_name( '1 Year', 'type'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'info_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
        <div class="tab-pane" id="144_hours">
          <?php $tid=reset(taxonomy_get_term_by_name( '144 Hours', 'type'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'info_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
        <div class="tab-pane" id="summer_camp">
          <?php $tid=reset(taxonomy_get_term_by_name( 'Summer Camp', 'type'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'info_block_sum', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
        <div class="tab-pane" id="bachelor">
          <?php $tid=reset(taxonomy_get_term_by_name( 'Bachelor', 'type'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'info_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
        <div class="tab-pane" id="master">
          <?php $tid=reset(taxonomy_get_term_by_name( 'Master', 'type'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'info_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
      </div>
    </div>
  </div>
  <div id="gallery" class="row">
    <div class="col-md-12">
      <h3><?php print t("Gallery"); ?></h3>
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#photo" data-toggle="tab" tab-name="photo"><?php print t( "Photo");?></a></li>
          <li><a href="#video" data-toggle="tab" tab-name="video"><?php print t( "Video");?></a></li>
        </ul>
      </div>
      <div class="tab-content col-md-9">
        <div class="tab-pane active" id="photo">
        </div>
        <div class="tab-pane" id="video">
        </div>
      </div>
    </div>
  </div>
  <div id="howtoapply" class="row">
    <div class="col-md-12">
      <h3><?php print t("How to apply"); ?></h3>
      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#ha_1_year" data-toggle="tab" tab-name="ha_1_year"><?php print t( "1 Year");?></a></li>
          <li><a href="#ha_144_hours" data-toggle="tab" tab-name="ha_144_hours"><?php print t( "144 Hours");?></a></li>
          <li class="disabled"><a href="#ha_summer_camp" data-toggle="tab" tab-name="ha_summer_camp"><?php print t( "Summer Camp");?></a></li>
          <li class="disabled"><a href="#ha_bachelor" data-toggle="tab" tab-name="ha_bachelor"><?php print t( "Bachelor");?></a></li>
          <li class="disabled"><a href="#ha_master" data-toggle="tab" tab-name="ha_master"><?php print t( "Master");?></a></li>
        </ul>
      </div>
      <div class="tab-content col-md-9">
        <div class="tab-pane active" id="ha_1_year">
          <?php $tid=reset(taxonomy_get_term_by_name( 'How to apply 1 Year', 'type'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'info_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
        <div class="tab-pane" id="ha_144_hours">
          <?php $tid=reset(taxonomy_get_term_by_name( 'How to apply 144 hours', 'type'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'info_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
        <div class="tab-pane" id="ha_summer_camp">
          <?php $tid=reset(taxonomy_get_term_by_name( 'How to apply Summer Camp', 'type'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'info_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
        <div class="tab-pane" id="ha_bachelor">
          <?php $tid=reset(taxonomy_get_term_by_name( 'How to apply Bachelor', 'type'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'info_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
        <div class="tab-pane" id="ha_master">
          <?php $tid=reset(taxonomy_get_term_by_name( 'How to apply Master', 'type'))->tid;?>
          <?php $block_view=views_page( 'front_pages', 'info_block', $tid); ?>
          <?php print $block_view[ 'content'];?>
        </div>
      </div>
    </div>
  </div>
  <div id="contact" class="row">
    <div class="col-md-12">
      <div class="row">
          <h3><?php print t("Contact"); ?></h3>
          <div class="tabbable tabs-left">
          <ul class="nav nav-tabs">
            <li><a href="#contact_us" data-toggle="tab" tab-name="contact_us"><?php print t('Send message');?></a></li>
            <li class="active"><a href="#contact_map" data-toggle="tab" tab-name="contact_map"><?php print t('Map');?></a>
            <li>
              <a><?php print t('Address');?></a>
              <p><?php print t('7B, Ietim Gurji str. Tbilisi 0105, Georgia');?></p>
              <p><?php print t('Phone:');?>(+995) 32  245 75 45</p>
            </li>
          </ul>
          </div>
        <div class="tab-content col-md-9">
          <div class="tab-pane" id="contact_us">
            <div>
            <?php
                require_once drupal_get_path('module', 'contact') .'/contact.pages.inc';
  print drupal_render(drupal_get_form('contact_site_form'));
            ?>
            </div>
          </div>
          <div class="tab-pane active" id="contact_map">
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
            <script type="text/javascript" src="<?php print $theme_path;?>/js/contactmap.js"></script>
            <div id="map_canvas" style="margin: 0; padding: 0; height: 200px;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="sidelink"></a>
<div class="sidebtn"></div>