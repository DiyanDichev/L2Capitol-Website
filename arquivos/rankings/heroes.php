<?php include "../../configs/config.php"; ?>
<div class="top-content"><span style="padding:0 200px;" class="title-page">OLYMPIADS</span></div>
<div class="middle-content">

<div class="text-content">
<span class="title-text" style="font-family:'trajan Pro'; font-size:14px;">OLYMPIADS LIST</span></br></br>
<center>
<style type="text/css">
<!--
.style5 {font-size: 12px; font-family: "trajan Pro";  }
.style8 {font-size: 10px; font-family: "trajan Pro"; }
.style4 {font-size: 10px; font-family: "trajan Pro"; }


-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /></head>
<body>


<table width="400" border="0" class="style4">
  <tr>
    <td align="center">Listing candidates heroes server</td>
  </tr>
</table>
<br>
<br>
<table width="380" border="0">
  <tr bgcolor="#84734f" class="style5" align="center" height="30">
    <td width="80">Char:</td>
    <td width="80">Class:</td>
    <td width="80">Wins:</td>
    <td width="80">Fights:</td>
    <td width="80">Clan:</td>
    <td width="80">Ally:</td>

  </tr>
<?php
$sql = mysql_query("SELECT * FROM olympiad_nobles ORDER BY char_name") or die(mysql_error());
$cor = 0;
while($c = mysql_fetch_array($sql)) {
      $cor = $cor + 1;
      $bg  = $cor % 2 == 0 ? '#F1F1F1' : '#E8E8E8';

      $h = mysql_query("SELECT * FROM characters WHERE Obj_Id = '".$c['char_id']."'") or die(mysql_error());
      $n = mysql_fetch_array($h);
      $l = mysql_query("SELECT * FROM class_list WHERE id = '".$n['base_class']."'") or die(mysql_error());
      $g = mysql_fetch_array($l);
      $i = mysql_query("SELECT * FROM clan_data WHERE clan_id = '".$n['clanid']."'") or die(mysql_error());
      $j = mysql_fetch_array($i);
      $k = mysql_query("SELECT * FROM olympiad_nobles ") or die(mysql_error());
      $w = mysql_fetch_array($k);
      $g['class_name'] = explode("_", $g['class_name']);
      $j['clan_name'] = empty($n['clanid']) ? 'Sem Clan.' : $j['clan_name'];
      $j['ally_name'] = empty($j['ally_id']) ? 'Sem Alliance.' : $j['ally_name'];

?>

  <tr class="style8" align="center" height="23">
    <td><?php echo $n['char_name']; ?></td>
    <td><?php echo ucwords($g['class_name'][1]); ?></td>
    <td><?php echo $w['olympiad_points']; ?></td>
    <td><?php echo $w['competitions_done']; ?></td>
    <td><?php echo $j['clan_name']; ?></td>
    <td><?php echo $j['ally_name']; ?></td>


  </tr>
<?php
}
?>
</table>
</center>
</div>

</div>
<div class="bottom-content"></div>
