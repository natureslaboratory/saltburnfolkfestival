<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php
	$id = store_sale($_POST);
?>
<?php perch_layout("global.header") ?>

	<h1>Your Cart</h1>
	<h2>Tickets</h2>

	<?php 
		$tickets = simple_tickets_data(); 
		$dueNow = 0;
		$dueThen = 0;
		foreach($tickets as $ticket){
			
			$qty = $_POST['ticketID_standard_'.$ticket['ticketID']];
			$qtyC = $_POST['ticketID_concession_'.$ticket['ticketID']];
			
			if($qty>0){
				$lineTotal = number_format($qty*$ticket['ticketPrice'],2);
				echo "<p><strong>".$ticket['eventName']."</strong> x ".$qty." at &pound;".$ticket['ticketPrice']." = &pound;".$lineTotal."</p>";
				if($ticket['ticketPayable']==1){
					$dueNow = $dueNow+$lineTotal;
				}else{
					$dueThen = $dueThen+$lineTotal;
				}
			}
			if($qtyC>0){
				$lineTotal = number_format($qtyC*$ticket['concessionPrice'],2);
				echo "<p><strong>".$ticket['eventName']." Concession</strong> x ".$qtyC." at &pound;".$ticket['concessionPrice']." = &pound;".$lineTotal."</p>";
				if($ticket['ticketPayable']==1){
					$dueNow = $dueNow+$lineTotal;
				}else{
					$dueThen = $dueThen+$lineTotal;	
				}
			}
			
		}
		
		$dueNow = number_format($dueNow,2);
		$dueThen = number_format($dueThen,2);
	?>
	
	<h2>Contact Details</h2>
	<p><strong>Name:</strong> <?php echo $_POST['name']; ?></p>
	<p><strong>Mobile:</strong> <?php echo $_POST['mobile']; ?></p>
	<p><strong>Landline:</strong> <?php echo $_POST['landline']; ?></p>
	<p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
	<p><strong>Address:</strong> <?php echo $_POST['address1']; ?><?php if($_POST['address1']){echo ", ";}?><?php echo $_POST['address2']; ?><?php if($_POST['address2']){echo ", ";}?><?php echo $_POST['address3']; ?><?php if($_POST['address3']){echo ", ";}?><?php echo $_POST['town']; ?><?php if($_POST['town']){echo ", ";}?><?php echo $_POST['region']; ?><?php if($_POST['region']){echo ", ";}?><?php echo $_POST['postcode']; ?><?php if($_POST['postcode']){echo ", ";}?><?php echo $_POST['country']; ?></p>
	
	<h2>Payments</h2>
	<p><strong>Due Now:</strong> &pound;<?php echo $dueNow; ?></p>
	<p><strong>Payable at the Box Office on Arrival:</strong> &pound;<?php echo $dueThen; ?></p>
	
	<h2>Ready to Pay?</h2>
	<form action="https://secure-test.worldpay.com/wcc/purchase" method=POST>
		<input type="hidden" name="testMode" value="100">
		<input type="hidden" name="instId" value="1372264">
		<input type="hidden" name="cartId" value="<?php echo $id; ?>">
		<input type="hidden" name="amount" value="<?php echo $dueNow; ?>">
		<input type="hidden" name="currency" value="GBP">
		
		<input type="hidden" name="address1" value="<?php echo $_POST['address1']; ?>">
		<input type="hidden" name="address2" value="<?php echo $_POST['address2']; ?>">
		<input type="hidden" name="address3" value="<?php echo $_POST['address3']; ?>">
		<input type="hidden" name="town" value="<?php echo $_POST['town']; ?>">
		<input type="hidden" name="region" value="<?php echo $_POST['region']; ?>">
		<input type="hidden" name="postcode" value="<?php echo $_POST['postcode']; ?>">
		<input type="hidden" name="country" value="<?php if($_POST['country']=='United Kingdom'){echo 'GB';}else{echo $_POST['country'];} ?>">
		<input type="hidden" name="desc" value="Saltburn Folk Festival Tickets">
		<input type="hidden" name="accId1" value="SALTBURNFOLKM1">
		
		<input type="hidden" name="authMode" value="A">
		<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
		<input type="hidden" name="tel" value="<?php echo $_POST['mobile']; ?>">
		<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
		
		<input type="hidden" name="hideCurrency" value="true">
		<input type="hidden" name="lang" value="en-GB">
		
		<input type="hidden" name="compName" value="Saltburn Folk Festival">

		<input type=submit value="Proceed to Payment">
	</form>
</div>

<?php perch_layout("global.footer") ?>
