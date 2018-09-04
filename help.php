<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

	

<style>
table, th, td {
      padding:4px;
	 align: center;
}
body,td,th {
	color: #333333;
	;
	font-family: Vrinda;
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 50px;
	margin-top: 40px;
	background-image: url(images/background.jpg);
	background-repeat: repeat-x;
}
.STYLE2 {
	font-size: 12px;
	font-family: "Times New Roman", Times, serif;
}
.STYLE3 {
	font-size: 18px;
	font-weight: bold;
}
a:link {
	text-decoration: none;
	color: #000000;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.STYLE4 {font-size: 24px; width:800px;}
.STYLE7 {font-weight: bold}
.STYLE8 {font-size: 24px}
.STYLE9 {color: #000000; font-weight: bold;}
.STYLE10 {color: #FFFFFF}
</style>
</head>
<body onLoad="MM_preloadImages('../images/matchmaker1.jpg','../images/results1.jpg','../images/about1.jpg','../images/help1.jpg')">
<img src="images/title.jpg" align="left" alt="matchmaker" hspace="0" vspace="0" />
<p align="right">&nbsp;</p>
<p align="right">&nbsp;</p>
<p align="right"><span class="STYLE21 STYLE8" align="right"><span class="STYLE22  STYLE9"><a href="index.php" target="_blank">Home </a>&nbsp; &nbsp; <span class="STYLE10">Help</span> &nbsp;&nbsp; <a href="about.php" target="_blank">About</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<p align="right"><span class="STYLE21" align="right">&nbsp;&nbsp;&nbsp;</span> <br />
  <a href="index.html" class="STYLE7"></a></p>
<!--<div align="center">
<img src="images/DDRC_logo.jpg" alt="logo" />
<h2 class="STYLE1" style = 'text-align:center; font-size:50px;'>Matching Technology To People<br>
  <br>
</h2>
<table border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td><a href="index.php" target="_top" onClick="MM_nbGroup('down','group1','Matchmaker','',1)" onMouseOver="MM_nbGroup('over','Matchmaker','./images/matchmaker1.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="./images/matchmaker0.jpg" alt="" name="Matchmaker" width="296" height="60" border="0" onload=""></a></td>
    <td><a href="results.php" target="_top" onClick="MM_nbGroup('down','group1','Results','',1)" onMouseOver="MM_nbGroup('over','Results','./images/results1.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="./images/results0.jpg" alt="" name="Results" width="156" height="60" border="0" onload=""></a></td>
    <td><a href="about.php" target="_top" onClick="MM_nbGroup('down','group1','About','',1)" onMouseOver="MM_nbGroup('over','About','./images/about1.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="./images/about0.jpg" alt="" name="About" width="156" height="60" border="0" onload=""></a></td>
    <td><a href="help.php" target="_top" onClick="MM_nbGroup('down','group1','Help','',1)" onMouseOver="MM_nbGroup('over','Help','./images/help1.jpg','',1)" onMouseOut="MM_nbGroup('out')"><img src="./images/help0.jpg" alt="" name="Help" width="156" height="60" border="0" onload=""></a></td>
  </tr>
</table>
<p>&nbsp;</p>

<p>&nbsp;</p>
</div>-->





<p>
  <?php



/*
index.php
Andrew Clay <andrew.c.clay@ucdenver.edu>
File to view products


*/









?>
</p><div align="center" width="800px">
<!--<p align="center" class="STYLE4">&nbsp;</p>-->
<p align="center" class="STYLE4">&nbsp;</p>
<p align="left" class="STYLE4">We would like to help you to find a device that suits your needs.<br>
  <br>
The way to use the site is to click on the Matchmaker link above and then answer the questions.<br>
<br>
  Once you have answered the questions, just click submit!<br>
  <br>
After looking at your results, you can click to see the individual item, and after that you can click on the device again in order to see peripheral devices that will help accomplish your goal.</p>
<p class="STYLE4">&nbsp;</p></div>
<hr align="center" width="700" size="2">
<p><br />
</p>
<div id="stcpDiv">
<p align="center" >copyright&copy; 2014 Developmental Disabilities Resource Center</p>
<p align="center"><span class="STYLE3"><a href="http://http://www.ddrcco.com/">contact us</a></span></p>
</div>

</body>
</html>
