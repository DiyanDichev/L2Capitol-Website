<?php include "configs/config.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>L2 Capitol - High Five Private Server</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<link rel="icon" type="text/css" href="imgs/favicon.ico" />
</head>

<body>


<div id="container">



<div class="menu">

<ul id="nav">
<li class="home"><a href="home.php">HOME</a></li>
<li><a href="register.php">REGISTER</a></li>
<li><a href="downloads.php">DOWNLOADS</a></li>
<li><a href="info.php">UPDATES</a></li>
<li><a href="rankings/heroes.php">OLYMPIADS</a></li>
<li><a href="rules.php">RULES</a></li>
<li><a href="donate.php">DONATIONS</a></li>
</ul>

</div>

<?php include "sid_left.php"; ?>

<div class="content">
 <img src="imgs/ajax-loader.gif" width="16" height="16" alt="Carregando." id="loading" />
 <?php
include "arquivos/home.php";
 ?>
</div>
<?php include "sid-right.php"; ?>


</div>

<div class="footer">
<div class="text-footer">
www.L2Capitol.com<br />

<span style="font-size:14px;">©2018-2021, L2 Capitol - All rights reserved</span><br />

<a id="linkfooter" href="https://www.facebook.com/L2Capitol">Layout Design & developed by L2 Capitol</a><br /><br />



NCsoft®, the interlocking NC logo, Lineage® II, and all associated logos and designs are trademarks or registered trademarks or<br />
 service marks of NCsoft Corp.

All rights reserved and other trademarks are the property of their respective owners.<br />

</div>
</div>
</body>
</html>