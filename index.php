<?php
ob_start();
session_start();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"UTF-8" />



<style>
table, th, td {
     padding:4px;
	 align: center;
}
body,td,th {
	font-family: Vrinda;
	font-size: 12px;
	color: #333333;
}
body {
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 50px;
	margin-top: 40px;
	background-image: url(images/background.jpg);
	background-repeat: repeat-x;
}
.STYLE5 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 20;
}
.STYLE6 {font-size: 36px}
.STYLE7 {
	color: #000000;
	font-weight: bold;
}
a:link {
	text-decoration: none;
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
.STYLE9 {font-size: 12px}
.STYLE11 {
	font-size: 18px;
	color: #FF6600;
	font-weight: bold;
}
.STYLE12{background-image:url(images/button.jpg);width:244px ;height:100px}
a:link {
	text-decoration: none;
	color: #000000;
}
.STYLE16 {font-size: 24px}
.STYLE18 {font-size: 36px; font-family: Vrinda; }
.STYLE19 {font-family: Vrinda}
.STYLE21 {
	font-size: 24px;
	font-weight: bold;
}
.STYLE22 {color: #000000}
.STYLE23 {color: #FFFFFF}
</style>
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
</head>
<body onload="MM_preloadImages('images/matchmaker1.jpg','images/results1.jpg','images/about1.jpg','images/help1.jpg')">


<!--
<h2  align="left" class="STYLE17" style = 'text-align:left; line-height:0%;font-size:50px;'><img src="images/DDRC_logo.jpg" alt="logo" width="187" height="64" />Matching Technology To People</h2>--!>
<!--<div align="left">
<table border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td><a href="index.php" target="_top" onclick="MM_nbGroup('down','group1','Matchmaker','',1)" onmouseover="MM_nbGroup('over','Matchmaker','images/matchmaker1.jpg','',1)" onmouseout="MM_nbGroup('out')"><img src="images/matchmaker0.jpg" alt="" name="Matchmaker" width="296" height="60" border="0" id="Matchmaker" onload="" /></a></td>
    <td><a href="results.php" target="_top" onclick="MM_nbGroup('down','group1','Results','',1)" onmouseover="MM_nbGroup('over','Results','images/results1.jpg','',1)" onmouseout="MM_nbGroup('out')"><img src="images/results0.jpg" alt="" name="Results" width="156" height="60" border="0" id="Results" onload="" /></a></td>
    <td><a href="about.php" target="_top" onclick="MM_nbGroup('down','group1','About','',1)" onmouseover="MM_nbGroup('over','About','images/about1.jpg','',1)" onmouseout="MM_nbGroup('out')"><img src="images/about0.jpg" alt="" name="About" width="156" height="60" border="0" id="About" onload="" /></a></td>
    <td><a href="help.php" target="_top" onclick="MM_nbGroup('down','group1','Help','',1)" onmouseover="MM_nbGroup('over','Help','images/help1.jpg','',1)" onmouseout="MM_nbGroup('out')"><img src="images/help0.jpg" alt="" name="Help" width="156" height="60" border="0" id="Help" onload="" /></a></td>
  </tr>
</table>
<p>&nbsp;</p>
</div>-->
<img src="images/title.jpg" align="left" alt="matchmaker" hspace="0" vspace="0" />
<p align="right">&nbsp;</p>
<p align="right">&nbsp;</p>

<p align="right"><span class="STYLE21" align="right"><span class="STYLE23">Home</span> <span class="STYLE22">&nbsp; &nbsp; <a href="help.php" target="_blank">Help</a> &nbsp;&nbsp; <a href="about.php" target="_blank">About</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<p align="right"><span class="STYLE21" align="right">&nbsp;&nbsp;&nbsp;</span> <br />
  <a href="index.html" class="STYLE7"></a></p>
<div align="center">
<form action='index.php' method='post' class="STYLE5" align="center">
<p style="line-height:50%" align="center" class="STYLE6">&nbsp;</p>
<p align="center" class="STYLE18" style="line-height:50%">What would you like to do?<br>
    <br>
  <br>
  
  <input  name="question1" type="radio" value="ans1">
  <span class="STYLE16">Entertainment<img src="images/entertainment.jpg" width="38" height="37" hspace="5" align="absmiddle" />
    </input>
    <input name="question1"  type="radio"  value="ans2">
    Communicate<img src="images/communicate.png" width="34" height="33" hspace="5" align="absmiddle" />
    </input>
    <input name="question1"  type="radio" value="ans3" >
    Scheduling<img src="images/schedule.png" width="33" height="31" hspace="5" align="absmiddle" />
    </input>
    <input name="question1"  type="radio" value="ans4">
    Everyday Tasks<img src="images/everyday tasks.png" width="37" height="35" align="absmiddle" />
    </input>
    <br />
    <br>
    <input  name="question1" type="radio" value="ans5">
    All of the Above
    </input>
    
    </select>
  </span></p>
<span class="STYLE19"><br>
</span>
<p align="center" class="STYLE18" style="line-height:50%">
What Kind of Device would you like?<br><br><br>
	
	<input type="radio" name="question2" value="type1">
	<span class="STYLE16">Mobile Device: Android<img src="images/android-4096-black.png" width="48" height="48" align="absmiddle" />
	</input>
	<input type="radio" name="question2"  value="type2">
	Mobile Device: Apple<img src="images/apple.png" width="42" height="42" align="absmiddle" />
	</input>
	<input type="radio" name="question2" value="type3">
	Specialized Devices<span class="STYLE18" style="line-height:50%"><img src="images/tag_special-512.png" width="39" height="40" hspace="5" align="absmiddle" /></span>
	</input>
	<br><br>
	<input type="radio" name="question2" value="type4">
	No Preference</span>
	<span class="STYLE16">
	</input>
	</select>
    </span></p>
<br>




  <input type='submit' value='' class="STYLE12" name='go' /> 
</form>	
</div>
<p><br />
  <br />
</p>
<br />
<br />
<hr align="center" width="700" size="2" />
<p><br />
</p><div id="stcpDiv">
<p align="center" class="STYLE9">copyright&copy; 2014 Developmental Disabilities Resource Center</p>
<p align="center"><span class="STYLE11"><a href="http://http://www.ddrcco.com/">contact us</a></span></p>
<p align="center"><span class="STYLE11"><a href="admin.php">Admin Login</a></span></p>
</div>
<p>
<?php

if(isset($_POST['go'])){
	if($_POST['question1'] != "")
	{
		$question1 = $_POST['question1'];
		$_SESSION['question1'] = $question1;
		header("Location: ./results.php");
	}
	else{
		header("Location: ./index.php");
	}
	if($_POST['question2'] != "")
	{
		$question2 = $_POST['question2'];
		$_SESSION['question2'] = $question2;
	}
	else{
		header("Location: ./index.php");
	}
	
	
	
}
else{
}
?>
</p>
</body>
</html>