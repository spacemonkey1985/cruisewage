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
</head>
<body>
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
                    <li><a href="index.php"><span>Home</span></a></li>
                    <li><a href="about.php"><span>About</span></a></li>
                    <li><a href="process.php"><span>Process</span></a></li>
                    <li class="tabs-current"><span class="tab-right-corner">Q &amp; A</span></li>
                    <li><a href="contact.php"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="tabbar">
    </div>
    
    <div class="spacer">
    	<img src="images/spacer-middle.png" height="100%" width="100%" alt="Green Background" />
    	<div class="spacer-content">
        	<script type="text/javascript">
            	// JavaScript Document
 
				/*
				Cross browser Marquee script- © Dynamic Drive (www.dynamicdrive.com)
				For full source code, 100's more DHTML scripts, and Terms Of Use, visit http://www.dynamicdrive.com
				Credit MUST stay intact
				*/
				 
				//Specify the marquee's width (in pixels)
				var marqueewidth="980px"
				//Specify the marquee's height
				var marqueeheight="20px"
				//Specify the marquee's marquee speed (larger is faster 1-10)
				var marqueespeed=1
				//configure background color:
				var marqueebgcolor="#FFFFFF"
				//Pause marquee onMousever (0=no. 1=yes)?
				var pauseit=0
				 
				//Specify the marquee's content (don't delete <nobr> tag)
				//Keep all content on ONE line, and backslash any single quotations (ie: that\'s great):
				 
				var marqueecontent='<nobr><div class="marquee">Currency Exchange Current Rates: <?php echo $conversions[0][0] ?>: <?php echo $conversions[0][1] ?> | <?php echo $conversions[1][0] ?>: <?php echo $conversions[1][1] ?> | <?php echo $conversions[2][0] ?>: <?php echo $conversions[2][1] ?> | <?php echo $conversions[3][0] ?>: <?php echo $conversions[3][1] ?> | <?php echo $conversions[4][0] ?>: <?php echo $conversions[4][1] ?> | <?php echo $conversions[5][0] ?>: <?php echo $conversions[5][1] ?> (Indication Rates Only - Updated Every 30 Minutes)- - - </div></nobr>'
				 
				 
				////NO NEED TO EDIT BELOW THIS LINE////////////
				marqueespeed=(document.all)? marqueespeed : Math.max(1, marqueespeed-1) //slow speed down by 1 for NS
				var copyspeed=marqueespeed
				var pausespeed=(pauseit==0)? copyspeed: 0
				var iedom=document.all||document.getElementById
				if (iedom)
					document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+marqueecontent+'</span>')
				var actualwidth=''
				var cross_marquee, ns_marquee
				 
				function populate(){
					if (iedom){
					cross_marquee=document.getElementById? document.getElementById("iemarquee") : document.all.iemarquee
					cross_marquee.style.left=parseInt(marqueewidth)+8+"px"
					cross_marquee.innerHTML=marqueecontent
					actualwidth=document.all? temp.offsetWidth : document.getElementById("temp").offsetWidth
					}
					else if (document.layers){
					ns_marquee=document.ns_marquee.document.ns_marquee2
					ns_marquee.left=parseInt(marqueewidth)+8
					ns_marquee.document.write(marqueecontent)
					ns_marquee.document.close()
					actualwidth=ns_marquee.document.width
					}
					lefttime=setInterval("scrollmarquee()",20)
				}
				window.onload=populate
				 
				function scrollmarquee(){
					if (iedom){
						if (parseInt(cross_marquee.style.left)>(actualwidth*(-1)+8))
							cross_marquee.style.left=parseInt(cross_marquee.style.left)-copyspeed+"px"
						else
							cross_marquee.style.left=parseInt(marqueewidth)+8+"px"
					}
					else if (document.layers){
						if (ns_marquee.left>(actualwidth*(-1)+8))
							ns_marquee.left-=copyspeed
						else
							ns_marquee.left=parseInt(marqueewidth)+8
					}
				}
				 
				if (iedom||document.layers){
					with (document){
						document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
							if (iedom){
								write('<div style="position:relative;width:'+marqueewidth+';height:'+marqueeheight+';overflow:hidden">')
								write('<div style="position:absolute;width:'+marqueewidth+';height:'+marqueeheight+'" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">')
								write('<div id="iemarquee" style="position:absolute;left:0px;top:0px"></div>')
								write('</div></div>')
							}
							else if (document.layers){
								write('<ilayer width='+marqueewidth+' height='+marqueeheight+' name="ns_marquee">')
								write('<layer name="ns_marquee2" left=0 top=0 onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed"></layer>')
								write('</ilayer>')
							}
						document.write('</td></table>')
					}
				}
            </script>
        </div>
    </div>
    
    <div class="content">
    	<div class="columns">
        	<div style="width: 100%; position: absolute; left: 0px; top: 30px;">
        		<h2>Q &amp; A</h2>
                <h2>How can I use your service?</h2>
                <ol>
                	<li>Register with Global by simply completing our Registration Form and faxing back it to us. For Money Laundering
                    Regulations proof of identification will be required.</li>
                    <li>A Senior Trader will call you to discuss your ongoing currency requirements and advise on current rates.</li>
                    <li>When you make a transaction a Deal Ticket confirming the details will be sent advising you where to remit your funds
                    and requesting the final recipient bank details.</li>
                    <li>After remitting your funds to our segregated Barclays Client account, Global will convert the funds into your chosen
                    currency, and send to the destination notified.</li>
                </ol>
                <br />
                <h2>How long does it take for my funds to reach my foreign bank account?</h2>
                Once we have cleared funds (allow 5 working days for a cheque, 2/3 days for a BACS transfer and instantly for a CHAPS
                transfer) your chosen foreign currency will be immediately transferred and should reach your designated bank account
                within 1 to 5 working days.
                <br />
                <h2>Will my funds be secure?</h2>
                Authorised Payment Institutions, such as Global, are required to safeguard client funds held in relation to an electronic
                payment. Global also have to meet stringent criteria, set by the FSA, in terms of corporate governance, solvency risk
                identification and management. Global is fully authorised by the FSA to provide payment services as an Authorised
                Payment Institution (PI).<br />
                You can search the list of FSA authorised payment service companies at
               <a href="http://www.fsa.gov.uk/register/psdFirmSearchForm.do">http://www.fsa.gov.uk/register/psdFirmSearchForm.do</a><br />
                Global's Financial Services Authority Payment Institute Number is 504346 and our HMRC Money Laundering Registration
                Number is: 12137189.
                <br />
                <h2>How do you manage to beat the banks?</h2>
                We monitor a range of treasury providers to secure the most competitive exchange rates in the market. In addition we
                have a high turnover, with low fixed costs and overheads, allowing us to pass the considerable savings generated directly
                onto you, the client.
                <br />
                <h2>Are the rates guaranteed?</h2>
                Yes. We give actual exchange rates prevalent at that specific time rather than indication rates provided by other sources
                such as internet sites and teletext.
                <br />
                <h2>How much does it cost to use your service?</h2>
                Nothing as there are no fees to register, no commissions and no telegraphic transfer costs.
                <br />
                <h2>How do I get my money to you?</h2>
                You can send us a cheque, or if you need money transferred quickly, you can use a CHAPS or BACS payment method
                from your bank direct to our segregated Barclays Client account.
                <br /><br />
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
    </div>
</body>
</html>
