<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.header") ?>
<?php

perch_content_create("Artist", [ "template" => "artist.html" ]);
perch_content_custom("Artist");

?>
<?php perch_layout("global.footer") ?>