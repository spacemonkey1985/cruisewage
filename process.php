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
                    <li class="tabs-current"><span class="tab-right-corner">Process</span></li>
                    <li><a href="faq.php"><span>Q &amp; A</span></a></li>
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
        	<div style="width: 550px; position: absolute; left: 0px; top: 30px;">
        		<h2>Process</h2>
                At CWE we understand you need complete confidence
                in how your money is handled and where it is at all times.
                The process is very simple and allows you to be in full
                control. The GCEN have an annual turnover of forex
                transactions at nearly half a billion pounds. This is not an
                automated process; every transaction is dealt individually
                by an actual person.
                <br /><br />
                None of this process is at any cost to you; there are no
                hidden fees or charges.
                <br /><br />
                <br /><br />
                <div style="text-align: center">
                	<a href="application.php"><img src="images/apply-btn.png" alt="Apply Online" border="0" /></a>
                </div>
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
            <div style="width: 278px; height:470px; position: absolute; left: 570px; top: -15px; background: url(images/process-bg.png);">
				<div style="padding: 20px; text-align: center; color: #406589;">
                	Sign up for a dollar bank account if you do
                    not already have one, your money must still
                    be in dollars
					<br /><br />
                    Contact us via the form
                    <br /><br />
                    We contact you to discuss
                    <br /><br />
                    A forex transaction is agreed with a Senior
                    Trader. This gives you your exact exchange
                    rate. This does not change
                    <br /><br />
                    You confirm this with your paperwork by
                    signing and faxing back to us
                    <br /><br />
                    Your funds are remitted to a secure Barclays
                    Bank client account
                    <br /><br />
                    Currency is promptly paid in to the UK
                    account of your choice at GCEN rates
                </div>
            </div>
        </div>
    </div>
</body>
</html>
