<?php include "../../configs/config.php"; ?>
<div class="top-content"><span style="padding:0 200px;" class="title-page">TOP 50 PK</span></div>
<div class="middle-content">

<div class="text-content">
<span class="title-text" style="font-family:'trajan Pro'; font-size:14px;">TOP PK LIST</span></br></br>

<style type="text/css">
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
<div id="toppk">
<div id="topo-toppk"></div>
<table width="300" border="0" align="center"  class="table">
<tr>
<td class="rowt">Ranking:</td>
<td class="rowt">Name:</td>
<td class="rowt">Pk:</td>
<td class="rowt">PvP:</td>
</tr>
<?php

$accesslevel = 'accesslevel';//Verifique se na tabela do mysql 'characters' se o campo de acess level e igual se não for mude.
$pvp = 'pvpkills';//Verifique se na tabela do mysql 'characters' se o campo de pvpkills e igual se não for mude.
$pk = 'pkkills';//Verifique se na tabela do mysql 'characters' se o campo de pkkills e igual se não for mude.
$limite = 30 ;

$top = mysql_query("SELECT * FROM characters where $accesslevel = 0 ORDER BY $pk DESC LIMIT 0, ".$limite."");
$fixo = 1;
while($p = mysql_fetch_array($top)){
	$sqlc = "select * from clan_data where clan_id =".$p['clanid']."";
	$qc = mysql_query($sqlc) or die (mysql_error());
	$c = mysql_fetch_array($qc);
	if(empty($c['ally_name']))
		$ally = "<font color='#FFF'>No aliance</font>";
	else
		$ally = $c['ally_name'];
	if(empty($c['clan_name']))
		$clan = "<font color='#FFF'>No clan</font>";
	else
		$clan = $c['clan_name'];
	$sqlcs = "select * from characters where classID =".$p['classid']."";
	$qcs = mysql_query($sqlcs) or die (mysql_error());
	$cs = mysql_fetch_array($qcs);
	echo '<tr>';
	echo "<td class=row>".$fixo."&deg;</td>";
    echo "<td class=row><a style='color:#000;text-decoration:none;' href='#' class='tooltip' >".$p['char_name']."<span>Player name: <font color='#F90'>".$p['char_name']."</font><br>Level:<font color='#F90'> ".$p['level']."</font><br> Class:<font color='#F90'> ".$cs['ClassName']."</font><br> Clan:<font color='#F90'> ".$clan."</font><br> Ally:<font color='#F90'> ".$ally."</font><br> PvP: <font color='#F90'> ".$p[$pvp]."</font><br>Pk: <font color='#F90'>".$p[$pk]."</font></span></a></td>";
	echo "<td class=row>".$p[$pk]."</td>";
    echo "<td class=row>".$p[$pvp]."</td>";
  	echo "</tr>";
  	$fixo++;
}
?>
</table>
</div>
</center>


</div>

</div>
<div class="bottom-content"></div>
