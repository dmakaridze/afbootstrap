<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<?php $af_theme_path = drupal_get_path('theme', 'afbootstrap');?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
    <link rel="stylesheet" type="text/css" href="<?php print $af_theme_path;?>/css/slick.css"/>
     <link rel="stylesheet" type="text/css" href="<?php print $af_theme_path;?>/css/slick-theme.css"/>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <a id="top"></a>
  <?php print $page; ?>
  <div id="footer"></div>
  <?php print $page_bottom; ?>
  <script src="<?php print $af_theme_path;?>/js/animatescroll.min.js"></script>
  <script type="text/javascript" src="<?php print $af_theme_path;?>/js/slick.min.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function($){
    $('.slick-slideshow').slick({
  infinite: false,
  slidesToShow: 3,
  slidesToScroll: 3
});
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      $('.slick-slideshow').slick('setPosition');
    })
    var br = $.browser;
    $( ".sidelink" ).click(function() {
      $('body').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});
    });
    $(window).scroll(function() {
        var top = $(document).scrollTop();
        if (top > 400) {
          $(".sidebtn").css({bottom: '0', position: 'fixed', right: '0'});
          $(".sidelink").css({bottom: '0', position: 'fixed', right: '0'});
        } else {
          $(".sidebtn").css({bottom: '-300px', position: 'fixed', right: '0'});
          $(".sidelink").css({bottom: '0', position: 'fixed', right: '0'});
        }
    });
  });
  </script>
</body>
</html>
