<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My-tour bootstrap Design website | Home :: w3layouts</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->

<div style="height:0"></div>
<div class=category-content>
    <div class=category-sidebar>
        <table cellpadding="0" cellspacing="0">
            <tr><td><div style="background: #4169E1;box-shadow: 0 2px 5px 0 rgba(0,0,0,.26);padding: 7px;margin-left: 2px; font-size: 20px;">Category</div></td></tr>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">


<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}
mysqli_close($cn);
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px" style="margin-bottom:11px;">
<tr><td class="headingText">Welcome to JN Maragia foundation</td></tr>
<tr><td class="paraText" width="900px">
The JN Maragia Foundation works tirelessly with visionary organizations to empower young people in Bonchari 
constituency to access dignified and fulfilling work. We envision a future where the youth are included, 
thriving, and their leadership and contributions are valued. Our foundation collaborates with the private sector,
 donors, youth, and civil society to build effective systems, supportive policies, and an enabling environment 
 for employment opportunities and entrepreneurial success. We are dedicated to creating a world where everyone 
 in Bonchari has the opportunity to learn, prosper, and achieve their full 
 potential.</td><td style="background-image:url(images/m10.jpg); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="400px" height="250px" ><div style="background:linear-gradient(#09F,#096,#09F); vertical-align:text-top; padding-left:5%;  width:100%;">     Together Make  &nbsp;&nbsp;&nbsp;Bonchari work </div	></td></tr></table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>