<!--GAGE R&R - Measurement Analysis Tool
 * Copyright (C) 2011 Ashok Sivaji (ashok.sivaji at mimos dot my)
 * Copyright (C) 2011Pavithra P.Manogaran (pavithra.manogaran at mimos dot my)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 -->
<html><head>

<?php

//set connection
$con = mysql_connect("localhost","root","ROOT");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("gage",$con);

?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Gage R & R</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript">



function MM_preloadImages() { 

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}



function MM_swapImgRestore() {

  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;

}



function MM_findObj(n, d) { 

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_swapImage() { 

  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)

   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}

}



</script>

</head>



<body onLoad="MM_preloadImages('images/more-over.jpg')">
<form name="form" action="reporting.php" method="POST" onSubmit="return docheck()">
<!--Create header for this webpage-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="outertable">

  <tr>

    <td  valign="top" class="black-bg" height="98"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="innertable">

      <tr>

        <td><table width="100%" border="0" cellspacing="0" cellpadding="0"  height="99">

          <tr>

            <td width="30%" class="logotext">Gage R & R </td>

            <td width="70%" valign="top" align="right"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

                  <tr>

                    <td align="center" class="text2"><a href="home.php" class="text2">Home</a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

                  <tr>

                    <td align="center" class="text2"><a href="requirement.php" class="text2">Requirement </a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

                  <tr>

                    <td align="center" class="text2"><a href="measurement.php" class="text2">Measurement</a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

                  <tr>

                    <td align="center"class="text2"><a href="metrics.php" class="text2">Metrics</a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-over">

                  <tr>

                    <td align="center" class="text1"><a href="reporting.php" class="text1">Reporting</a></td>

                  </tr>

                </table></td>

				<td width="1">&nbsp;</td>

                <td width="151"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="menu-bg-normal">

                  <tr>

                    <td align="center"class="text2"><a href="help.php" class="text2">Help</a> </td>

                  </tr>

                </table></td>

              </tr>

            </table></td>

          </tr>

        </table></td>

      </tr>

    </table></td>

  </tr>

  <tr>

    <td  valign="top" class="light-white-bg"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="innertable">



      <tr>

        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white-bg">

          <tr>

            <td width="66%" align="center">&nbsp;</td>

            <td width="34%">&nbsp;</td>

          </tr>

          <tr>

            <td align="center" valign="top" style="border-right:1px dotted #CCCCCC;"><table width="581" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td colspan="2" align="left" ><table width="581" border="0" cellspacing="0" cellpadding="0">

                    <tr>

                      <td colspan="2" align="left" class="heading1">REPORTING</td>

                    </tr>

                    <tr>

                      <td height="15" colspan="2"><img src="images/line.jpg" width="579" height="2" /></td>

                    </tr>

    
    
    
    
 <table>
<tr>
<td>Gage Name</td><td> :
<select name="gn" style="width:60mm">
<option value=""> - SELECT -</option>
<?php
$RNRp=0;
//select all gage name available in gage database

$sql = "SELECT GageName FROM metrics";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {
	if($_POST["gn"]==$myrow["GageName"]){
?>

	<option value="<?php printf("%s",$myrow["GageName"]); ?>" selected><?php printf("%s",$myrow["GageName"]); ?></option>
<?php
	}else{
?>
	<option value="<?php printf("%s",$myrow["GageName"]); ?>"><?php printf("%s",$myrow["GageName"]); ?></option>
<?php
}
} while ($myrow = mysql_fetch_array($result));
} else {
	
}
?>

</select></td>
<td><input type="submit" name="load" value="LOAD"></td></table>
<br />
<br />   
    

    
    <img alt="Line chart" src="generated/demo6.png" style="border: 1px solid gray;"/><br /><br />
    
	<img alt="Line chart" src="generated/demo11.png" style="border: 1px solid gray;"/>
    

<?php
$sql = "SELECT * FROM metrics WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {

$RNRp=$myrow["pRnR"];
	
} while ($myrow = mysql_fetch_array($result));
} else {}

?>
<?php
if ($RNRp<=0){
echo "";

}else if  ($RNRp<=10){
echo "Acceptable!";

}else if ($RNRp>=30){
echo "Not Acceptable!!";
}

else if ($RNRp>10&&$RNRp<30){
echo "Conditionally Acceptable";
}
?>
<br>
 <tr>
  <td bgcolor="#CACACA"width="20%" class="adad"  style="text-align: left">%R&R = <?php printf("%s",number_format($RNRp,4, '.', '')); ?></td>


  <?php


	include 'libchart/classes/libchart.php';

	$chart = new LineChart(700,300);

$serie1 = new XYDataSet();
$serie2 = new XYDataSet();
$serie3 = new XYDataSet();
$serie4 = new XYDataSet();

//retrieve data from db
$sql = "SELECT * FROM requirement WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {
	
for($i=1;$i<=$myrow[SampleSize];$i++){
	
	for($c=1;$c<=$myrow[Appraiser];$c++){
		$name="P".$i."A".$c;
		$sql1 = "SELECT * FROM measureloop4 WHERE GageName='$_POST[gn]' AND Part='$i' AND Appraiser='$c'";
		$result1 = mysql_query($sql1,$con);
		if ($myrow1 = mysql_fetch_array($result1)){
	$serie1->addPoint(new Point($name, $myrow1[TotalRange]));	
	}
	
	$sql2 = "SELECT * FROM metrics WHERE GageName='$_POST[gn]'";
$result2 = mysql_query($sql2,$con);
if ($myrow2 = mysql_fetch_array($result2)){
	$serie2->addPoint(new Point($name, $myrow2[UCLr]));	
}

	$sql3 = "SELECT * FROM metrics WHERE GageName='$_POST[gn]'";
$result3 = mysql_query($sql3,$con);
if ($myrow3 = mysql_fetch_array($result3)){
	$serie3->addPoint(new Point($name, $myrow3[LCLr]));	
}



	$sql4 = "SELECT * FROM metrics WHERE GageName='$_POST[gn]'";
$result4 = mysql_query($sql4,$con);
if ($myrow4 = mysql_fetch_array($result4)){
	$serie4->addPoint(new Point($name, $myrow4[Rdbar]));	
}

}
}

} while ($myrow = mysql_fetch_array($result));

} else {

}




$dataSet = new XYSeriesDataSet();
$dataSet->addSerie("Range", $serie1);
$dataSet->addSerie("UCLr", $serie2);
$dataSet->addSerie("LCLr", $serie3);
$dataSet->addSerie("Rdbar", $serie4);

	$chart->setDataSet($dataSet);

	$chart->setTitle("R-Chart");
	$chart->render("generated/demo6.png");







//second graph




	include "libchart/classes/libchart.php";

	$chart = new LineChart(700,300);

$serie5 = new XYDataSet();
$serie6 = new XYDataSet();
$serie7 = new XYDataSet();
$serie8 = new XYDataSet();

//retrieve data from db
$sql = "SELECT * FROM requirement WHERE GageName='$_POST[gn]'";
$result = mysql_query($sql,$con);
if ($myrow = mysql_fetch_array($result)){
do {
	
for($i=1;$i<=$myrow[SampleSize];$i++){
	
	for($c=1;$c<=$myrow[Appraiser];$c++){
		$name="P".$i."A".$c;
		$sql5 = "SELECT * FROM measureloop4 WHERE GageName='$_POST[gn]' AND Part='$i' AND Appraiser='$c'";
		$result5 = mysql_query($sql5,$con);
		if ($myrow5 = mysql_fetch_array($result5)){
	$serie5->addPoint(new Point($name, $myrow5[TotalAvg]));	
	}
	
	$sql6 = "SELECT * FROM metrics WHERE GageName='$_POST[gn]'";
$result6 = mysql_query($sql6,$con);
if ($myrow6 = mysql_fetch_array($result6)){
	$serie6->addPoint(new Point($name, $myrow6[UCLx]));	
}

	$sql7 = "SELECT * FROM metrics WHERE GageName='$_POST[gn]'";
$result7 = mysql_query($sql7,$con);
if ($myrow7 = mysql_fetch_array($result7)){
	$serie7->addPoint(new Point($name, $myrow7[LCLx]));	
}



	$sql8 = "SELECT * FROM metrics WHERE GageName='$_POST[gn]'";
$result8 = mysql_query($sql8,$con);
if ($myrow8 = mysql_fetch_array($result8)){
	$serie8->addPoint(new Point($name, $myrow8[Xbar]));	
}

}
}

} while ($myrow = mysql_fetch_array($result));

} else {

}




$dataSet = new XYSeriesDataSet();
$dataSet->addSerie("Average", $serie5);
$dataSet->addSerie("UCLx", $serie6);
$dataSet->addSerie("LCLx", $serie7);
$dataSet->addSerie("Xbar", $serie8);

	$chart->setDataSet($dataSet);

	$chart->setTitle("Xbar-Chart");
	$chart->render("generated/demo11.png");

?>  

   
                    <tr>

                      <td colspan="2" align="right"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','images/more-over.jpg',1)"></a></td>

                    </tr>

                </table></td>

              </tr>

             

              <tr>

                <td colspan="2">&nbsp;</td>

              </tr>

              <tr>

                <td colspan="2">&nbsp;</td>

              </tr>

            </table></td>

            <td width="34%" align="center" valign="top"><table width="247" border="0" cellspacing="0" cellpadding="0">

              <tr>

                <td><table width="250" border="0" cellspacing="0" cellpadding="0">

                  <tr>

                   

                  </tr>

                  <tr>

                    <td width="117" height="20"></td>

                    </tr>

                 
                    </table></td>

                    </tr>

                </table></td>

              </tr>

              <tr>

                <td>&nbsp;</td>

              <tr>

                <td>&nbsp;</td>

              </tr>

              <tr>

                <td></td>

              </tr>

            </table></td>

        </tr>

          <tr>

            <td height="8" ></td>

        </tr>

		  

        </table></td>

</tr>

    </table></td>

  </tr>

  <tr>
<!--Create footer for the webpage-->
    <td  valign="top" >

      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="footerbg">

          <tr>

            <td width="1%" rowspan="2">&nbsp;</td>

            <td width="52%" rowspan="2" class="text5">Copyrights  &copy; MIMOS Berhad 2011. All Rights Reserved. </td>

            <td width="46%" align="right" class="link2">

			<a href="home.php">Home </a>&nbsp; |  &nbsp; 

			<a href="requirement.php">Requirement </a> &nbsp; |    &nbsp; 

			<a href="measurement.php">Measurement </a> &nbsp; |  &nbsp; 

			<a href="metrics.php">Metrics </a> &nbsp; |  &nbsp; 

			<a href="reporting.php">Reporting </a> &nbsp; |  &nbsp; 

			<a href="help.php">Help </a></td>

            <td width="1%" rowspan="2" class="link1">&nbsp;</td>

          </tr>

 

        </table></td>

  </tr>

</table>

</body>

</html>