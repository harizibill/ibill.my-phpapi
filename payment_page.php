<!-- 
# These sample pages are provided for information purposes only. It does not imply any recommendation or endorsement by anyone.
  These sample pages are provided for FREE.
  There is no warranty and no additional document. USE AT YOUR OWN RISK.
-->
<html>
<head>
<title>SAMPLE MERCHANT PAYMENT PAGE - Ecommerce Computer gadget</title>

<link rel="stylesheet" type="text/css" href="files/style.css">
</head>
<body bgcolor="#C0E7FE">
<center>
<?php

//Merchant will need to edit the below parameter to match their environment.


?>
<table border="0" cellpadding="0" cellspacing="0" height="96%" width="722">
    <tbody>
      <tr>
        <td colspan="3" align="left" height="50"><table style="background:#FDE6C4; border: 1px solid rgb(222, 217, 197);" cellpadding="0" cellspacing="0" height="50" width="722">
            <tbody>
              <tr>
                <td><table style="border: 1px solid rgb(255, 255, 255);" border="0" cellpadding="0" cellspacing="0" height="50" width="720">
                    <tbody>
                      <tr>
                        <td align="center"><strong>SAMPLE MERCHANT PAYMENT PAGE</strong></td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>
            </tbody>
          </table></td>
      </tr>
      <tr>
        <td colspan="3" align="left" height="21"><table style="border: 1px solid rgb(84, 141, 212);" class="menu" cellpadding="0" cellspacing="0" height="19" width="722">
            <tbody>
              <tr>
                <td align="center"></td>
              </tr>
            </tbody>
          </table></td>
      </tr>
      <tr>
        <td style="padding-left: 1px; padding-right: 1px;" align="left" valign="top" width="100%" colspan=2>
		<table bgcolor="#FDE6C4" border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
            <tbody>
			
              <tr>
                <td align="left" height="27" width="722"><p style="color: rgb(0, 0, 0); font-family: Tahoma,sans-serif; font-size: 12px; padding-left: 5px;"><b>My Shopping Cart&nbsp;&nbsp;>&nbsp;&nbsp;Transaction Details&nbsp;&nbsp;>&nbsp;&nbsp;Order Confirmation</b></p></td>
              </tr>
              <tr>
                <td style="padding-top: 2px;" valign="top"><table class="infoBox" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                    <tbody>
                      <tr>
                        <td valign="top"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="5" bgcolor="#FDE6C4">
                            <tbody>
                              <tr>
                                <td><table class="infoBox" aborder="1" cellpadding="2" cellspacing="1" width="100%">
                                    <tbody>
                                      <tr class="infoBoxContents">
                                        <td valign="top" width="99%"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
											<!-- List of Products Chosen --> 
                                              <tr>
                                                <td><table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tbody>
                                                      <tr>
                                                        <td class="main" ><b>Products</b> </td>
                                                        <td class="main" align="right"><b>Quantity</b></td>
                                                        <td class="main" align="right"><b>Total</b></td>
                                                      </tr>
                                                      <tr>
                                                        <td valign='top' class='main'>Logitech G102 Prodigy Mouse </td>
                                                        <td class='main' align='right' valign='top'>
															<input class=productdata type="text" size='4' value='1' disabled></td>
                                                        <td class='main' align='right' valign='top'>MYR
                                                          	<input class=productdata type="text" size='10' value='79.00' disabled></td>
                                                      </tr>
                                                      <tr>
                                                        <td valign='top' class='main'>Razer Ornata - Expert Membrane Gaming Keyboard </td>
                                                        <td class='main' align='right' valign='top'>
															<input class=productdata type="text" size='4' value='1' disabled></td>
                                                        <td class='main' align='right' valign='top'>MYR
                                                          	<input class=productdata type="text" size='10' value='313.00' disabled></td>
                                                      </tr>
                                                      <tr>
                                                        <td class='main' valign='top'>Sony MDR-ZX110 Stereo Headphones </td>
                                                        <td class='main' align='right' valign='top'>
															<input class=productdata type="text" size='4' value='1' disabled></td>
                                                        <td class='main' align='right' valign='top'>MYR
                                                          	<input class=productdata type="text" size='10' value='29.90' disabled></td>
                                                      </tr>
													  <!-- End of List Products Chosen --> 
                                                    </tbody>
                                                  </table>
                                                  <table border="0" cellpadding="10" cellspacing="0" width="100%" height="100%">
                                                    <tr>
                                                      <td width="71%" align=center class="main">&nbsp;</td>
                                                    </tr>                                                   
													<tr>
                                                       <td width="71%" align='right' valign='top' class='main'><b>Total Amount</b></td>
                                                        <td width="29%" align='right' valign='top' class='main'>MYR
                                                      		<input type="text" name="TxnAmount" id="TxnAmount" size='10' value="421.90" readonly></td>
                                                    </tr>
                                                  </table></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                      </tr>
                                    </tbody>
                                  </table></td>
                              </tr>
							  <!-- Submit transaction via FPX -->
                              <tr>
                                <td><form name="form1" method="post" action="https://ibill.my/merchant/?ng=client/iview/standard_api/" >
                                  <table border="0" cellpadding="2" cellspacing="1" width="100%">
                                    <tbody>
                                      <tr class="infoBoxContents">
                                        <td valign="top" width="30%"><table border="0" cellpadding="2" cellspacing="0" width="100%">
                                            <tbody>                                              
                                              <tr>
                                                <td height="164" align="center" class="main"><b>Payment Method via iBill.my</b>
												<p>&nbsp;</p>
												<input type="submit" style="cursor:hand" value="Pay Now"/>
												  <p>&nbsp;</p>
                                                  <p> <img src="image/ibill.png" border="2"/></p>
                                                  <p>&nbsp;</p>
												  <p class="main">&nbsp;</p>
                                                  <p>&nbsp;</p>
                                                  <p class="main"><strong>* Please ensure that your browser's pop up blocker has been disabled to avoid any interruption during making transaction.</strong></p>
                                                  <p>&nbsp;</p>
                                                  <p class="main"><strong>* Do not close browser / refresh page until you receive response.</strong></p>
                                                <p>&nbsp;</p></td>
                                              </tr>
                                            </tbody>
                                          </table></td>
                                      </tr>
                                    </tbody>
                                  </table>                                  
                                 
                          </table></td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>
            </tbody>
          </table></td>
      </tr>
      <tr>
        <td colspan="3" align="right" height="35" valign="top" width="722"><table border="0" cellpadding="0" cellspacing="0" width="722">
            <tbody>
              <tr> </tr>
              <tr>
                <td colspan="2"><table style="border: 1px solid rgb(84, 141, 212);" class="menu" cellpadding="0" cellspacing="0" height="19" width="722">
                    <tbody>
                      <tr>
                        <td align="center">&nbsp;&nbsp;Copyright iBill.my © 2018 All rights reserved&nbsp;&nbsp; </td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>
              
            </tbody>
          </table></td>
      </tr>
    </tbody>
  </table>
  <hr>    
  <p>&nbsp;</p>
  <table width="100%" border="0" align="center" cellpadding="7" cellspacing="0" >
    <tr>
      <td colspan="100"></td>
    </tr> 	
	
	<label>

<!-- Mandatory input need to send to iBill.my -->

<input type=hidden value="xxxxxxx" name="apiid"> <!-- Your API ID -->
<input type=hidden value="Ahmad Bin Mutalib" name="apiname"> <!-- Your customer name --> <!-- Value Attribute: varchar(255)  -->
<input type=hidden value="ahmadmutailb@gmail.com" name="apiemail"> <!-- Your customer email --> <!-- Value Attribute: varchar(255)  -->
<input type=hidden value="60123456789" name="apiphone"> <!-- Your customer phone --> <!-- Value Attribute: varchar(255)  -->
<input type=hidden value="No. 23 Jalan Damai 76342 Kuala Lumpur" name="apiaddress"> <!-- Your customer address --> <!-- Value Attribute: varchar(255)  -->
<input type=hidden value="421.90" name="apiamount"> <!-- Total amount customer to pay --> <!-- Value Attribute: decimal(18,2)  -->
<input type=hidden value="Payment for invoice 2031" name="apidetail"> <!-- Detail invoice/payment --> <!-- Value Attribute: varchar(255)  -->
<input type=hidden value="2031" name="apiorderid"> <!-- Order ID generated by your system --> <!-- Value Attribute: varchar(255)  -->
	</label>
  </table>
  </form>
</center>
<br>
</body>
</html>
