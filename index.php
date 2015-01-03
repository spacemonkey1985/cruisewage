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
	rate = <?php echo $conversions[4][1] ?>;
	
	var currentRate = document.getElementById('current-rate');
	currentRate.innerHTML = '<b>£1 = $<?php echo round($conversions[4][1], 2) ?></b>';
	
	var currentRate2 = document.getElementById('current-rate2');
	currentRate2.innerHTML = '<b>Based on Current £1 = $<?php echo round($conversions[4][1], 2) ?></b>';
	
	var enquireBtn = document.getElementById('enquire-btn');
	enquireBtn.href = 'enquiry.php';
}
function convert(){
	var from = document.getElementById('from');
	var to = document.getElementById('to');
	
	if(from.value != ''){
		var value = (from.value) * parseFloat(rate);
		to.value = Math.round(value * Math.pow(10, 2)) / Math.pow(10, 2);
		
		var enquireBtn = document.getElementById('enquire-btn');
		enquireBtn.href = 'enquiry.php?amount=' + to.value;
	}
}
function showPopup(sender){
	var popup = document.getElementById('popup');
	var hint = document.getElementById('hint');
	popup.style.display = 'inline';
	hint.style.display = 'none';
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
	var currentRate2 = document.getElementById('current-rate2');
	
	if(fromBtn.alt == 'GBP' && toBtn.alt == 'USD'){
		rate = <?php echo $conversions[1][1] ?>;
		currentRate.innerHTML = '<b>£1 = $<?php echo round($conversions[1][1], 2) ?></b>';
		currentRate2.innerHTML = '<b>Based on Current £1 = $<?php echo round($conversions[1][1], 2) ?></b>';
	}
	if(fromBtn.alt == 'GBP' && toBtn.alt == 'EUR'){
		rate = <?php echo $conversions[0][1] ?>;
		currentRate.innerHTML = '<b>£1 = &euro;<?php echo round($conversions[0][1], 2) ?></b>';
		currentRate2.innerHTML = '<b>Based on Current £1 = &euro;<?php echo round($conversions[0][1], 2) ?></b>';
	}
	if(fromBtn.alt == 'USD' && toBtn.alt == 'EUR'){
		rate = <?php echo $conversions[5][1] ?>;
		currentRate.innerHTML = '<b>$1 = &euro;<?php echo round($conversions[5][1], 2) ?></b>';
		currentRate2.innerHTML = '<b>Based on Current $1 = &euro;<?php echo round($conversions[5][1], 2) ?></b>';
	}
	if(fromBtn.alt == 'USD' && toBtn.alt == 'GBP'){
		rate = <?php echo $conversions[4][1] ?>;
		currentRate.innerHTML = '<b>$1 = £<?php echo round($conversions[4][1], 2) ?></b>';
		currentRate2.innerHTML = '<b>Based on Current $1 = £<?php echo round($conversions[4][1], 2) ?></b>';
	}
	if(fromBtn.alt == 'EUR' && toBtn.alt == 'GBP'){
		rate = <?php echo $conversions[3][1] ?>;
		currentRate.innerHTML = '<b>&euro;1 = £<?php echo round($conversions[3][1], 2) ?></b>';
		currentRate2.innerHTML = '<b>Based on Current &euro;1 = £<?php echo round($conversions[3][1], 2) ?></b>';
	}
	if(fromBtn.alt == 'EUR' && toBtn.alt == 'USD'){
		rate = <?php echo $conversions[2][1] ?>;
		currentRate.innerHTML = '<b>&euro;1 = $<?php echo round($conversions[2][1], 2) ?></b>';
		currentRate2.innerHTML = '<b>Based on Current &euro;1 = $<?php echo round($conversions[2][1], 2) ?></b>';
	}
}
</script>
</head>
<body onload="setUp();">
	<div class="popup" id="popup">
    	<div class="popup-content">
        	<div style="position: absolute; right: -10px; top: -10px;">
            	<a href="javascript:hidePopup();"><img src="images/close-btn.png" alt="Close" border="0" /></a>
            </div>
            <div style="position: absolute; right: 20px; top: 20px;">
            	<a href="javascript:chooseCurrency('gbp');"><img src="images/pound-btn.png" alt="GBP" border="0" /></a>
            </div>
            <div style="position: absolute; right: 20px; top: 79px;">
            	<a href="javascript:chooseCurrency('usd');"><img src="images/dollar-btn.png" alt="USD" border="0" /></a>
            </div>
            <div style="position: absolute; right: 20px; top: 138px;">
            	<a href="javascript:chooseCurrency('eur');"><img src="images/euro-btn.png" alt="EUR" border="0" /></a>
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
				<div id="current-rate"><b>$1 = £0.63</b></div>
            </div>
            
        	<div class="convert-form">
            	<div class="convert-form-content">
                	<div style="width: 83px; position: absolute; right: -40px; top: 47px; z-index: 10;">
                    	<img src="images/hint.png" alt="Hint" border="0" id="hint" />
                    </div>
                	<br />
                    <br />
                	<form>
                    	<table style="vertical-align: middle;">
                        	<tr>
                            	<td valign="middle">
                                	<input type="text" name="from" id="from" size="5" style="font-size: 36px; height: 39px;" />&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="showPopup('from');"><img src="images/dollar-btn.png" alt="USD" border="0" id="fromBtn" /></a>
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                            	<td valign="middle">
                                	<input type="text" name="to" id="to" size="5" style="font-size: 36px; height: 39px;" />&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="showPopup('to');"><img src="images/pound-btn.png" alt="GBP" border="0" id="toBtn" /></a>
                                    <br />
                                    <br />
                                </td>
                            </tr>
                            <tr>
                            	<td style="text-align: right;">
                                	<a href="javascript:convert();"><img src="images/convert-btn.png" alt="Convert" border="0" /></a>
                                </td>
                            </tr>
                            <tr>
                            	<td style="text-align: center">
                                    <br />
                                	<div id="current-rate2"><b>Based on Current $1 = £0.63</b></div>
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
        		<div style="text-align: center; font-size: larger; font-weight: bold;">
                	Taking a typical wage you will have an extra £500* in
                    your bank account with Cruisewage Exchange!<br /><br />
                    You get paid in Dollars.<br />
                    We give you pounds for your Dollars.<br />
                    No fees. No Bank Charges. No problem.<br />
                    <br /><br />
                </div>
                <br />
                An average wage on a cruise liner ranges from $1,800 - $3000 a month including 
                the tips you may receive. A contract period is either 6, 8 or 9 months, meaning 
                that potentially each person leaves the ship with between $10,800 up to a 
                staggering $27,000.
                <br /><br />
                We look at Simon, who has been working as a barman on a standard ship for a 6 
                month contract. He leaves with $10000 after his spends. Joe is a UK citizen with 
                Unnamed UK Bank. He gets paid and withdraws his GBP at £5,758.71. With CWE
                he could have drawn £6,272.35*. That’s over £500 Joe has given to his bank 
                purely from knowing no better. At a higher amount a show dancer working at $3,100 
                per month on an 8 month contract in the Caribbean leaves the Cruise with a final 
                sum of $24,800. With her UK bank she expects a return of £14,331 but she could 
                have managed to get an impressive £15,684*.
                <br /><br />
                Funds from your dollar accounts by BACS or CHAPS transfer or by personal cheque 
                this can be done as a single deposit or a monthly standing order can be set up. CWE 
                use the GCEN as a forex trader who provide the best rates. The quote you are given 
                is your money and there are no hidden fees or charges. 
                <br /><br />
                CWE help you understand the conversion process and make Forex a simple thing 
                done by anyone and not just major companies.
                <br /><br />
                <br />
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
            <div style="width: 278px; height:470px; position: absolute; left: 590px; top: 230px; background: url(images/process-bg.png);">
				<div style="padding: 20px; text-align: center; color: #406589;">
                	We look at Simon, who has been working as a barman on a standard ship for a 6 month contract. He leaves with $10000 after his spends. Joe is a UK citizen with Unnamed UK Bank.<br /><br />
He gets paid and withdraws his GBP at £5,758.71. With CWE he could have drawn £6,272.35*.<br /><br /> 
                    That’s over £500 Joe has given to his bank purely from knowing no better. At a higher amount a show dancer working at $3,100 per month on an 8 month contract in the Caribbean leaves the Cruise with a final sum of $24,800.<br /><br />
With her UK bank she expects a return of £14,331 but she could have managed to get an impressive £15,684*.  
                </div>
            </div>
        </div>
    </div>
</body>
</html>
