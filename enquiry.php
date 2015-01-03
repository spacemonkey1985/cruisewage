<?php
	include('rates.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>Cruisewage Exchange</title>
<link type="text/css" href="stylesheets/common.css" rel="stylesheet" />
<script type="text/javascript">

var source;
var rate;

function setUp(){
	rate = <?php echo round($conversions[1][1], 2) ?>;
	
	var currentRate = document.getElementById('current-rate');	
	currentRate.innerHTML = '<b>Based on Current £1 = $<?php echo round($conversions[1][1], 2) ?></b>';

	var enquireBtn = document.getElementById('enquire-btn');
	enquireBtn.href = 'enquiry.php';
}
function convert(){
	var from = document.getElementById('from');
	var to = document.getElementById('to');
	
	if(from.value != ''){
		to.value = (from.value) * parseFloat(rate);
		
		var enquireBtn = document.getElementById('enquire-btn');
		enquireBtn.href = 'enquiry.php?amount=' + to.value;
	}
}
function showPopup(sender){
	var popup = document.getElementById('popup');
	popup.style.display = 'inline';
	source = sender;
}
function hidePopup(){
	var popup = document.getElementById('popup');
	popup.style.display = 'none';
}
function chooseCurrency(currency){
	var popup = document.getElementById('popup');
	popup.style.display = 'none';
	
	var btn = document.getElementById(source + 'Btn');
	
	if(btn != null){
		switch (currency){
			case 'gbp':
				btn.src = 'images/pound-btn.png';
				btn.alt = 'GBP';
				break;
			case 'usd':
				btn.src = 'images/dollar-btn.png';
				btn.alt = 'USD';
				break;
			case 'eur':
				btn.src = 'images/euro-btn.png';
				btn.alt = 'EUR';
				break;
			default:
				break;
		}
	}
	
	var fromBtn = document.getElementById('fromBtn');
	var toBtn = document.getElementById('toBtn');
	var currentRate = document.getElementById('current-rate');
	
	if(fromBtn.alt == 'GBP' && toBtn.alt == 'USD'){
		rate = <?php echo round($conversions[1][1], 2) ?>;
		currentRate.innerHTML = '<b>Based on Current £1 = $<?php echo round($conversions[1][1], 2) ?></b>';
	}
	if(fromBtn.alt == 'GBP' && toBtn.alt == 'EUR'){
		rate = <?php echo round($conversions[0][1], 2) ?>;
		currentRate.innerHTML = '<b>Based on Current £1 = &euro;<?php echo round($conversions[0][1], 2) ?></b>';
	}
	if(fromBtn.alt == 'USD' && toBtn.alt == 'EUR'){
		rate = <?php echo round($conversions[5][1], 2) ?>;
		currentRate.innerHTML = '<b>Based on Current $1 = &euro;<?php echo round($conversions[5][1], 2) ?></b>';
	}
	if(fromBtn.alt == 'USD' && toBtn.alt == 'GBP'){
		rate = <?php echo round($conversions[4][1], 2) ?>;
		currentRate.innerHTML = '<b>Based on Current $1 = £<?php echo round($conversions[4][1], 2) ?></b>';
	}
	if(fromBtn.alt == 'EUR' && toBtn.alt == 'GBP'){
		rate = <?php echo round($conversions[3][1], 2) ?>;
		currentRate.innerHTML = '<b>Based on Current &euro;1 = £<?php echo round($conversions[3][1], 2) ?></b>';
	}
	if(fromBtn.alt == 'EUR' && toBtn.alt == 'USD'){
		rate = <?php echo round($conversions[2][1], 2) ?>;
		currentRate.innerHTML = '<b>Based on Current &euro;1 = $<?php echo round($conversions[2][1], 2) ?></b>';
	}
}
</script>
</head>
<body onload="setUp();">
	<div class="popup" id="popup">
    	<div class="popup-content">
        	<div style="position: absolute; right: -10px; top: -10px;">
            	<a href="#" onclick="hidePopup();"><img src="images/close-btn.png" alt="Close" border="0" /></a>
            </div>
            <div style="position: absolute; right: 20px; top: 20px;">
            	<a href="#" onclick="chooseCurrency('gbp');"><img src="images/pound-btn.png" alt="GBP" border="0" /></a>
            </div>
            <div style="position: absolute; right: 20px; top: 79px;">
            	<a href="#" onclick="chooseCurrency('usd');"><img src="images/dollar-btn.png" alt="USD" border="0" /></a>
            </div>
            <div style="position: absolute; right: 20px; top: 138px;">
            	<a href="#" onclick="chooseCurrency('eur');"><img src="images/euro-btn.png" alt="EUR" border="0" /></a>
            </div>
    	</div>
    </div>
    <div class="top-menu">
    	<div class="top-menu-content">
        	<div class="top-menu-connections">
            	<table width="100%" style="text-align: center; vertical-align: middle; padding:2px;">
                	<tr>
                    	<td><a href="http://twitter.com/cruisewage"><img src="images/conn1.png" alt="Twitter" border="0" /></a></td>
                        <td><a href="http://www.facebook.com/home.php?#!/pages/CruiseWage-Exchange/134052203310479"><img src="images/conn2.png" alt="Facebook" border="0" /></a></td>
                        <td><a href="http://digg.com/submit?url=http%3A//www.cruisewageexchange.com&amp;title=Cruisewage%20Exchange"><img src="images/conn3.png" alt="Digg" border="0" /></a></td>
                        <td style="text-align:center;"><script src="http://www.stumbleupon.com/hostedbadge.php?s=6&r=www.cruisewageexchange.com"></script>&nbsp;</td>
                    </tr>
                </table>
            </div>
        </div>        	
	</div>
    
	<div class="header">
    	<div class="header-content">
        	<br />
            <img src="images/logo.png" alt="Logo" />
            <div class="tabs">
                <ul>
                    <li class="tabs-current"><span class="tab-right-corner">Home</span></li>
                    <li><a href="about.php"><span>About</span></a></li>
                    <li><a href="process.php"><span>Process</span></a></li>
                    <li><a href="faq.php"><span>Q &amp; A</span></a></li>
                    <li><a href="contact.php"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="topbar">
    	<div class="topbar-content">
        	<div class="convert-title">
                <img src="images/converter-title.png" alt="Converter" />
            </div>
            
            <div class="topbar-image1">
            	<img src="images/photo.png" alt="Cruise Liner" />
            </div>
            
            <div style="position: absolute; left: 400px; color: #000; font-size: 26px;">
            	<h1>Current Rate</h1>
				<b>$1 = £<?php echo round($conversions[4][1], 2) ?></b>
            </div>
            
        	<div class="convert-form">
            	<div class="convert-form-content">
                	<br />
                    <br />
                	<form>
                    	<table style="vertical-align: middle;">
                        	<tr>
                            	<td valign="middle">
                                	<input type="text" name="from" size="5" style="font-size: 36px; height: 39px;" />&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="showPopup('from');"><img src="images/pound-btn.png" alt="GBP" border="0" id="fromBtn" /></a>
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                            	<td valign="middle">
                                	<input type="text" name="to" size="5" style="font-size: 36px; height: 39px;" />&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="showPopup('to');"><img src="images/dollar-btn.png" alt="USD" border="0" id="toBtn" /></a>
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                            	<td style="text-align: right;">
                                	<a href="#" onclick="convert();"><img src="images/convert-btn.png" alt="Convert" border="0" /></a>
                                </td>
                            </tr>
                            <tr>
                            	<td style="text-align: center">
                                    <br />
                                	<div id="current-rate"><b>Based on Current $1 = £0.63</b></div>
                                    <br />
                                    <span style="font-size: smaller;">To be used as an indicative rate only.<br />Final rate approved by a trader.</span>
                                    <br />
                                    <br />
                                    <a href="#" id="enquire-btn"><img src="images/enquire-btn.png" alt="Enquire" border="0" /></a>
                                </td>
                            </tr>
                        </table>
                    </form> 
                </div>
        	</div>
        
        </div>
    </div>
    
    <div class="spacer">
    	<img src="images/spacer-middle.png" height="100%" width="100%" alt="Green Background" />
    	<div class="spacer-content">
        </div>
    </div>
    
    <div class="content">
    	<div class="columns">
        	<div style="width: 550px; position: absolute; left: 0px; top: 60px;">
            	<h2>Enquiry Form</h2>
        		<form method="post" action="send_enquiry.php">
                	<table>
                    	<tr>
                        	<td>First name</td>
                            <td><input type="text" name="fname" /></td>
						</tr>
                        <tr>
                        	<td>Last name</td>
                            <td><input type="text" name="lname" /></td>
                        </tr>
                        <tr>
                        	<td>Tel No</td>
                            <td><input type="text" name="tel" /></td>
                        </tr>
                        <tr>
                        	<td>Mobile No</td>
                            <td><input type="text" name="mobile" /></td>
                        </tr>
                        <tr>
                        	<td>Email</td>
                            <td><input type="text" name="email" /></td>
                        </tr>
                        <tr>
                        	<td>Amount Wished to trade</td>
                            <td><input type="text" name="amount" value="<?php echo $_GET['amount'] ?>" /></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2" align="right">
                                <br />
                                <input type="submit" value="Send" style="width: 100px;" />
                            </td>
                        </tr>
                    </table>
                </form>
                <br /><br />
                <br />
                <br />
                <br />
				<br />
                <br />
                <br />
				<div class="legal">
                    <a href="legal.htm">&copy;2010 Cruise Wage Exchange. All rights reserved. Legal</a><br />
                    Site designed and built by <a href="http://webdesign.coulton.org">webdesign.coulton.org</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
