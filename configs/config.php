<?php

// Configurações do MySQL
$sql['usr'] = "root";    # Usuário, Ex: "root" (Geralmente é root mesmo)
$sql['pass'] = "Gg9006191024";                  # Senha, caso não tenha definido, deixe em branco, Ex: ""
$sql['db'] = "L2capitol";       # Database, Ex: "l2jdb"
$sql['host'] = "localhost";   # Endereço do servidor MySQL, Ex: "localhost"
// Fim das configurações do MySQL


// Não mexer abaixo
$open = mysql_connect($sql['host'], $sql['usr'], $sql['pass']) or die("Não foi possível conectar-se à database.");
$select_db = mysql_select_db($sql['db'], $open) or die("Database não encontrada ou inexistente.");
// Não mexer acima


// STATUS DO SERVIDOR 
//Configurações para mostrar Servidor Online/Offline no Site
$servidor = 'ip';//IP onde o Server está hospedado
$loginserver = @fsockopen($servidor, 2106, $errno, $errstr, 2);
$gameserver = @fsockopen($servidor, 7777, $errno2, $errstr2, 2);

// OPÇÃO DOS PLAYERS ONLINE
//$select = mysql_query("SELECT * FROM characters WHERE online = '1'") or die (mysql_error());
//$co = mysql_num_rows($select);
// OPÇÃO DOS PLAYERS ONLINE

//PLAYERS ONLINE 
	$online_add = "73";#ADICIONE AQUI O NUMERO A MAIS DE PLAYERS
	
	switch($online_add){
		case $online_add < 0;
		echo "";
		break;
		exit;
	}
	
	$seleciona_valores = mysql_query("SELECT * FROM characters WHERE online = '1'") or die (mysql_error());



// Configurações Gerais

$ddos = "Active";
$guard = "Active"; 

$update1 = "There is no new Updates"; 
$update2 = ""; 
$update3 = ""; 
$update4 = ""; 
$update5 = ""; 
$update6 = ""; 
$update7 = ""; 


// VOTES 

$itopz = "https://itopz.com/vote/325468";
$hopzone = "https://vgw.hopzone.net/site/vote/104410/1";
$network = "https://l2network.eu/index.php?a=in&u=ayaks90";
$l2topgs = "https://l2.topgameserver.net/lineage/voting/288/L2Capitol";
$l2tops = "https://l2topservers.com/l2top/531/l2capitol/vote";
$l2votes = "https://l2votes.com/votes.php?sid=435";


// DOWNLOADS 
$mirro1 = "https://mega.nz/file/av5ijSzR#smqoXmjI26l2229FstqtMY5_r_FKhqt4xuJXQ1HKA_w";
$mirro2 = "https://www.mediafire.com/file/dgg16qfpc01340j/L2Capitol_v1.4.rar/file";
$mirro3 = "https://www44.zippyshare.com/v/W33ps4vZ/file.html";


// COMMUNITY 
$forum = "http://l2capitol.proboards.com";
$discord = "https://discord.gg/zpuU9q7mdt";
$facebook = "https://www.facebook.com/L2Capitol";

// DONATE 
$donate = "https://itopz.com/donate/325468";




?>
                


