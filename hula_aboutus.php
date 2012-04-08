<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_PRIVACY);

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_PRIVACY));

  require(DIR_WS_INCLUDES . 'template_top.php');
?>

<h1>About Us</h1>

<div class="contentContainer">
  <div class="contentText">
    <?php 
      $about_query = tep_db_query("select content from ".TABLE_HULA_OUR_INFOS." where type = '".about."' ");
      $row = tep_db_fetch_array($about_query);
      echo $row['content'];
    ?>
  </div>

  <div class="buttonSet">
    <span class="buttonAction"><?php echo tep_draw_button(IMAGE_BUTTON_CONTINUE, 'triangle-1-e', tep_href_link(FILENAME_DEFAULT)); ?></span>
  </div>
</div>

<?php
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
