<?php /** * @file */ ?>
<?php global $theme_key; $theme_path=drupal_get_path( 'theme', $theme_key); ?>
<?php
function af_print_node($current_nid) {
  $current_node = node_load( $current_nid );
  $current_body = reset( $current_node->body );
  $current_node_view = $current_body[0]['safe_value'];
  print $current_node_view;
}
?>
<div id="header">
	<div id="language">
		<a href="en" id="lang-en"></a> <a href="ka" id="lang-ka"></a> <img
			src="<?php print $theme_path.'/images/'.$language->language;?>.jpg" />
	</div>
	<a href="#news" id="front-link-news" class="front-links"></a> <a
		href="#who-we-are" id="front-link-whoweare" class="front-links"></a> <a
		href="#programs" id="front-link-program" class="front-links"></a> <a
		href="#gallery" id="front-link-gallery" class="front-links"></a> <a
		href="#howtoapply" id="front-link-howtoapply" class="front-links"></a>
	<a href="#contact" id="front-link-contact" class="front-links"></a> <a
		href="#students" id="front-link-students" class="front-links"></a> <img
		src="<?php print $theme_path;?>/images/logo.png" id="logo"
		alt="Art Factory" />
	<div id="gif">
		<img src="<?php print $theme_path;?>/images/animation.gif"
			alt="Art Factory" id="front-menu" /> <img
			src="<?php print $theme_path;?>/images/bgfaade.png" alt="" />
	</div>
</div>
<div class="main-container <?php print $container_class; ?>">
	<div id="news" class="row"></div>
	<div id="who-we-are" class="row">
		<div class="col-md-12">
			<h3><?php print t("Who we are"); ?></h3>
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#about" data-toggle="tab"><?php print t( "About");?></a></li>
					<li><a href="#admin" data-toggle="tab"><?php print t( "Administration");?></a></li>
					<li><a href="#lectur" data-toggle="tab"><?php print t( "Lecturers");?></a></li>
				</ul>
			</div>
			<div class="tab-content col-md-9">
				<div class="tab-pane active" id="about"><?php print render($page['about']); ?></div>
				<div class="tab-pane " id="admin">admin</div>
				<div class="tab-pane " id="lectur">lectur</div>
			</div>
		</div>
	</div>
	<div id="programs" class="row">
		<div class="col-md-12">
			<h3><?php print t("Programs"); ?></h3>
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#1year"><?php print t("1 Year");?></a></li>
					<li><a href="#"><?php print t("144 Hours");?></a></li>
					<li><a href="#"><?php print t("Summer Camp");?></a></li>
					<li><a href="#"><?php print t("Bachelor");?></a></li>
					<li><a href="#"><?php print t("Master");?></a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane active colons" id="1year"><?php af_print_node(16); ?></div>
				<div class="tab-pane" id=""></div>
				<div class="tab-pane" id=""></div>
				<div class="tab-pane" id=""></div>
				<div class="tab-pane" id=""></div>
			</div>
		</div>
	</div>
	<div id="gallery" class="row">
		<div class="col-md-12">
			<h3><?php print t("Gallery"); ?></h3>
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#"><?php print t("Photo");?></a></li>
					<li><a href="#"><?php print t("Video");?></a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane active" id=""></div>
				<div class="tab-pane" id=""></div>
			</div>
		</div>
	</div>
	<div id="howtoapply" class="row">
		<div class="col-md-12">
			<h3><?php print t("How to apply"); ?></h3>
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#"><?php print t("1 Year");?></a></li>
					<li><a href="#"><?php print t("144 Hours");?></a></li>
					<li><a href="#"><?php print t("Summer Camp");?></a></li>
					<li><a href="#"><?php print t("Bachelor");?></a></li>
					<li><a href="#"><?php print t("Master");?></a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane active" id=""></div>
				<div class="tab-pane" id=""></div>
				<div class="tab-pane" id=""></div>
				<div class="tab-pane" id=""></div>
				<div class="tab-pane" id=""></div>
			</div>
		</div>
	</div>
	<div id="contact" class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
					<a href="contact"><h3><?php print t("CONTACT"); ?></h3></a>
				</div>
				<div class="col-md-10">
					<script type="text/javascript"
						src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
					<script type="text/javascript"
						src="<?php print $theme_path;?>/js/contactmap.js"></script>
					<div id="map_canvas" style="margin: 0; padding: 0; height: 200px;"></div>
				</div>
			</div>
		</div>
	</div>
</div>
