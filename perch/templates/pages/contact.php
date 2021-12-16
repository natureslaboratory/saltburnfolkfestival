
<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout("global.header") ?>
<?php perch_content_create("Contact Form", [ "template" => "contact_form.html" ]) ?>
<?php perch_content_custom("Contact Form"); ?>
<?php perch_layout("global.footer") ?>