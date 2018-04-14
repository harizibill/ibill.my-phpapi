<?php

//SAMPLE MERCHANT STATUS PAGE


// if Code payment status is 00 == payment success 

		$getJSON = $_POST['getJSON'];
	
		//Decode JSON
		$objJSON = json_decode($getJSON);
		$std_status_code = $objJSON->{'std_status_code'}; 		//Code payment status
		$std_status = $objJSON->{'std_status'};					//Payment Status
		$std_order_id = $objJSON->{'std_order_id'};				//Order ID send by your system
		$std_purchase_code = $objJSON->{'std_purchase_code'};	//Purchase Code
		$std_secret = $objJSON->{'std_secret'};					//Your secret key
		$std_amount = $objJSON->{'std_amount'};					//Total Amount Customer Pay
		$std_datepaid = $objJSON->{'std_datepaid'};				//Time Customer make payment
		
		
		if($std_secret!="yoursecretkey")								//check your secret key
		{
			if ($std_status_code == '00' && $std_status == 'Paid')		//Payment success
			{
				echo "SUCCESSFUL";					
			}
			elseif ($std_status_code == '99')							//Payment Pending
			{
				echo "PENDING FOR AUTHORIZER TO APPROVE";
			}
			else														//Payment Unsuccessful
			{
				echo "UNSUCCESSFUL.";
			}
		}
?>