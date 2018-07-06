<html>
<head>
<title>SAMPLE MERCHANT STATUS PAGE - Ecommerce Computer gadget</title>
</head>

<center>
<?php

$std_status_code=$_POST['std_status_code']; 		//Code payment status
$std_status=$_POST['std_status']; 					//Payment Status
$std_order_id=$_POST['std_order_id'];				//Order ID send by your system
$std_purchase_code=$_POST['std_purchase_code'];		//Purchase Code
$std_hash_code=$_POST['std_hash_code'];					//Security code send from iBill
$std_amount=$_POST['std_amount'];					//Total Amount Customer Pay
$std_datepaid=$_POST['std_datepaid'];				//Time Customer make payment


// if Code payment status is 00 == payment success 
?>

  <table border="0" cellpadding="0" cellspacing="0" height="300" width="722">
    <tbody>
      <tr>
        <td colspan="3" align="left" height="111"><table style="background:#FDE6C4;border: 1px solid rgb(222, 217, 197);" cellpadding="0" cellspacing="0" height="111" width="722" >
            <tbody>
              <tr>
                <td align="center"><strong>SAMPLE MERCHANT STATUS PAGE</strong></td>
              </tr>
            </tbody>
          </table>
		  </td>
      </tr>
      <!-- header_eof //-->
      <!-- body //-->
      <tr>
        <td style="padding-right: 1px;" align="right" valign="top" width="6"><br>
        </td>
        <td style="padding-left: 1px; padding-right: 1px;" align="left" valign="top" width="716" colspan=2>
		<table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="5" class="infoBelow" width="100%" height="100%">
		  <tbody>
              <tr>
                <td height="150" valign="top">				
				<p class="normal">
                    Thanks for shopping online! </p>
                  <p>&nbsp;</p>				  
				  
				  <p class="normal"><b>TRANSACTION DETAILS</b></p>
				<!-- Display details for Receipt -->
				  <table width="100%" align="center">
				  <?php
				$yourhashcode = md5('yourapisecretkey'.'yourapiid'.$std_order_id.$std_amount);
				  if($std_hash_code == $yourhashcode)
				  {
					?>
					<tr>
                      <td width="44%" align="left" class="main">Transaction Status</td>
                      <td width="7%" align="center" class="main">:</td>
                      <td width="49%" align="left" class="main"><strong>
					  <!-- Comparing Debit Auth Code and Credit Auth Code to cater SUCCESSFUL and UNSUCCESSFUL result -->	
						<?php
						  if ($std_status_code == '00' && $std_status == 'Paid')
							{
								echo "SUCCESSFUL";					
							}
							elseif ($std_status_code == '99')
							{
								echo "PENDING FOR AUTHORIZER TO APPROVE";
							}
							else
							{
								echo "UNSUCCESSFUL.";
							} 
						?>
						</strong></td>
                    </tr>
                    <tr>
                      <td width="44%" align="left" class="main">Purchase Code</td>
                      <td width="7%" align="center" class="main">:</td>
                      <td width="49%" align="left" class="main"><?php print $std_purchase_code; ?></td>
                    </tr>
                    <tr>
                      <td width="44%" align="left" class="main">Invoice Order No.</td>
                      <td width="7%" align="center" class="main">:</td>
                      <td width="49%" align="left" class="main"><?php print $std_order_id; ?></td>
                    </tr>
					<tr>
                      <td width="44%" align="left" class="main">Transaction Amount</td>
                      <td width="7%" align="center" class="main">:</td>
                      <td width="49%" align="left" class="main">&nbsp;RM<?php print $std_amount; ?></td>
                    </tr>					
					<tr>
                      <td width="44%" align="left" class="main">Payment Time</td>
                      <td width="7%" align="center" class="main">:</td>
                      <td width="49%" align="left" class="main"><?php print $std_datepaid; ?></td>
                    </tr>
					
					<?php
					}
					else
					{
					?>
					<tr>
                      <td width="44%" align="left" class="main">Error</td>
                      <td width="7%" align="center" class="main">:</td>
                      <td width="49%" align="left" class="main">&nbsp;Secret Key Error</td>
                    </tr>
					<?php
					}
					
					?>
					
                  </table>
			    </td>
              </tr>
		  </tbody>
          </table></td>
      </tr>
      <!-- footer //-->  
    </tbody>
  </table>
  <p>&nbsp;</p>
  <hr>
  <center>
  <p class="infoBelow">&nbsp;</p>
	<p>&nbsp;</p>
	<tr>
        <td style="padding-left: 1px; padding-right: 1px;" align="left" valign="top" width="716" colspan=2>
			
		</td>
	</tr>
  <p>&nbsp;</p>
</center>   
<!-- footer_eof //-->
<br>
</body></html>
