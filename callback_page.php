<?php
		$hash_code = md5('standard'.'yourapiid'.'yourapisecret'.'3.00');
		$std_post = array(
							'apitype'=>'standard',				//fix value
							'apiid'=>'yourapiid',				//your api id from ibill
							'apiorderid'=>'1002',				//your order id
							'apihashcode'=>$hash_code,			//generate hash code as above
							'apiamount'=>'3.00',				//your customer transaction amount
							'apiemail'=>'atiqahmb@gmail.com');		//your customer email
				
	   $callbackJSON = json_encode($std_post);
	   

		$url = 'https://ibill.my/merchant/?ng=callback_api';		//link need to send data
		$ch = curl_init($url);   									// where to post                                                                   
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $callbackJSON);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		$headers   = array();
		$headers[] = "Cache-Control: no-cache";
		$headers[] = "Content-Type: application/json";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);  
		$results = curl_exec($ch);
		if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
     	}
		curl_close($ch);
		//echo $results;
		
		$objJSON = json_decode($results);						//decode json result
		
		//should return 'SUCCESS'
		$callback_status = $objJSON->{'callback_status'};		//callback Status
		$message = $objJSON->{'message'};						//callback Message 
		
		//Refer on statuspage.php
		$std_status_code = $objJSON->{'std_status_code'};		//payment status code
		$std_status = $objJSON->{'std_status'};					//payment status
		$std_order_id = $objJSON->{'std_order_id'};				//your order id
		$std_purchase_code = $objJSON->{'std_purchase_code'};	//ibill transaction id
		$std_amount = $objJSON->{'std_amount'};					//transaction amount
		$std_datepaid = $objJSON->{'std_datepaid'};				//transaction date time
		
		//Hash code for security
		$std_hash_code = $objJSON->{'std_hash_code'};			//Hash code
		$hash_code = md5('yourapisecret'.'yourapiid'.$std_order_id.$std_amount);	//hash code format
		
		
		

	
