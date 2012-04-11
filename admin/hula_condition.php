<?php
$info_type = 'conditions';
$sql = "SELECT content FROM ".TABLE_HULA_OUR_INFOS." WHERE type='".$info_type."'";
include_once("hula_fck_template.php");
?>
