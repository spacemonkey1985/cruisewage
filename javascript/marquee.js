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