<?php
/*
** SISTEMA DE ACM COM AJAX 
** CRIADO POR WEULLER KRYSTHIAN
** weuller_krysthian@hotmail.com
** SISTEMA CRIADO EM 26/11/2011
*/

/***** Configura��es Gerais *****/

//Nome do Servidor
define("SERVER_NAME", "L2 Fuel");

//Site do Servidor
define("SERVER_SITE", "www.l2fuel.com");

//Vers�o do Servidor(0 = Interlude, 1 = Gracia Final, 2 = Freya). (Para vers�es acima de Freya deixar n�2, caso tenha erro de tabela, re-configure nas configura��es das tabelas, logo abaixo.)
define("SERVER_VERSION", "0");

//Email de Contato
define("SERVER_EMAIL", "contato@l2fuel.com");


/***** Configura��es do Banco de Dados *****/

//Definir Servidor. Padr�o: localhost
define("DB_SERVER", "localhost");

//Definir o Usuario da Database
define("DB_USER", "root");

//Definir a Senha da Database
define("DB_PASSWORD", "");

//Definir o Nome da Database
define("DB_NAME", "ketra");

//Definir a Porta da Database. Padr�o: 3306(MYSQL)
define("DB_PORT", "3306");


/***** Configura��es das Tabelas e Colunas *****/

//Definir o nome da TABELA onde fica as ACCOUNTS
define("TABLE_ACC", "accounts");

//Definir o nome da COLUNA onde fica os LOGINS da TABELA de ACCOUNTS
define("COLUMN_ACC_LOGIN", "login");

//Definir o nome da COLUNA onde fica as SENHAS da TABELA de ACCOUNTS
define("COLUMN_ACC_PASSWORD", "password");

//Definir o nome da COLUNA onde fica os LOGINS da TABELA de ACCOUNTS
define("COLUMN_ACC_ACCESS_LEVEL", "access_level");


//Definir o nome da TABELA onde fica os CHARACTERS
define("TABLE_CHAR", "characters");

//Definir o nome da COLUNA onde fica o NOME DA CONTA DO CHAR da TABELA de CHARS
define("COLUMN_CHAR_ACC_NAME", "account_name");

//Definir o nome da COLUNA onde fica o ID DO CHAR da TABELA de CHARS
define("COLUMN_CHAR_ID", "obj_Id");

//Definir o nome da COLUNA onde fica o NOME DO CHAR da TABELA de CHARS
define("COLUMN_CHAR_NAME", "char_name");

//Definir o nome da COLUNA onde fica o ACCESSLEVEL DO CHAR da TABELA de CHARS
define("COLUMN_CHAR_ACCESS_LEVEL", "accesslevel");

//Definir o nome da COLUNA onde fica o ID DO CLAN DO CHAR da TABELA de CHARS
define("COLUMN_CHAR_ID_CLAN", "clanid");

//Definir o nome da COLUNA onde fica os ID DA CLASSE DO CHAR da TABELA de CHARS
define("COLUMN_CHAR_ID_CLASS", "classid");
?>