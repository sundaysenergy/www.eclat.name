<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
		<meta name="generator" content="Adobe GoLive">
		<title>&Eacute;clat - personalities in verse. . .</title>
	</head>

	<body bgcolor="#5b5f3e" text="#e5c78d" link="#e5c78d" vlink="#dfc165">
		<div align="left">
			<table width="720" border="0" cellspacing="2" cellpadding="0" background="images/eclatbg.jpg">
				<tr height="670">
					<td valign="top" width="178" height="670"><?php include("menu.php") ?>
					</td>
					<td width="25" height="670"></td>
					<td valign="top" height="670">
<?
if ($_REQUEST["area"] == "howitworks"){
include("howitworks.php");
}
if ($_REQUEST["area"] == "testimonials"){
include("testimonials.php");
}
if ($_REQUEST["area"] == "benefits"){
include("benefits.php");
}
if ($_REQUEST["area"] == "thepitch"){
include("thepitch.php");
}
if ($_REQUEST["area"] == "contactinfo"){
include("contactinfo.php");
}
if ($_REQUEST["area"] == "thebio"){
include("thebio.php");
}
if ($_REQUEST["area"] == "deliverables"){
include("deliverables.php");
}
if ($_REQUEST["area"] == "photos"){
include("photos.php");
}
if ($_REQUEST["area"] == "photos_big"){
include("photos_big.php");
}
?>	
					</td>
				</tr>
			</table>
			<p></p>
		</div>
	</body>

</html>