<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php
	$transactionID = $_POST['cartId'];	
	$authCode = $_POST['rawAuthMessage'];
	if($authCode=='cardbe.msg.authorised'){
		$id = log_order($transactionID);
	}
?>