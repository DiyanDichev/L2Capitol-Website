<?php include "../../configs/config.php"; ?>
<div class="top-content"><span style="padding:0 200px;" class="title-page">CASTLE SIEGE</span></div>
<div class="middle-content">

<div class="text-content">
<span class="title-text" style="font-family:'trajan Pro'; font-size:14px;">CASTLE SIEGE LIST</span></br></br>

<style type="text/css">
#siege{width:400px; height:400px;}
.table {text-align:center; color:#99480c;}
.rowt{font-size:15px; font-weight:normal; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif}
.row {font-size:13px;font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; color:#99480c;}
.table a:hover {background:#ffffff; text-decoration:none;} /* background-color e necessario para o IE6 */
.table a.tooltip span {display:none; padding:2px 3px; margin-left:8px; width:auto;}
.table a.tooltip:hover span{display:inline; position:absolute; background:#000; border:1px solid #666; color:#FFF; text-align:justify; font-size:12px; font-weight:bold;}
</style>
</head>
<body>
<center>
<div id="siege">
<div id="topo-toppvp"></div>
<table width="400px" border="0" align="center">
  <tr class="rowt" align="center" height="25">
    <td>Castle :</td>
    <td>Clan:</td>
    <td>Lord:</td>
    <td>Alliance:</td>
    <td>Next Siege:</td>
 </tr>
<?php
$sql = mysql_query("SELECT * FROM castle ORDER BY name") or die(mysql_error());
$cor = 0;
while($c = mysql_fetch_array($sql)) {
      $cor = $cor + 1;
      $bg  = $cor % 2 == 0 ? '#ba9b45' : '#987e35';

      $cl = mysql_query("SELECT * FROM clan_data WHERE hasCastle = '".$c['id']."'") or die(mysql_error());
      $clan = mysql_fetch_array($cl);
	  
	  $l = mysql_query("SELECT * FROM characters WHERE obj_id = '".$clan['leader_id']."'") or die(mysql_error());
	  $lord = mysql_fetch_array($l);

?>

  <tr style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:12px;" bgcolor="<?php echo $bg; ?>" class="style8" align="center" height="23">
    <td><a style="color:#000;text-decoration:none;" href="#" class="tooltip" ><?php echo $c['name']; ?><span>Castle Name: <font color="#FFF"><?php echo $c['name'];?></font><br />Tax Percent: <font color="#FFF"><?php echo $c['taxPercent']."%"; ?></font></span> </a></td>
    <td><?php echo !empty($clan['clan_name']) ? $clan['clan_name'] : "No Clan"; ?></td>
    <td><?php echo !empty($lord['char_name']) ? $lord['char_name'] : "No Lord"; ?></td>
    <td><?php echo !empty($clan['ally_name']) ? $clan['ally_name'] : "No Ally"; ?></td>
    <td><?php echo @date('D\, j M Y H\:i',$c['siegeDate']/1000); ?></td>
  </tr>
<?php
}
?>
</table>
</div>
</center>


</div>

</div>
<div class="bottom-content"></div>
