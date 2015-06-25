<?php
/************************************************************/
/*                           FTP                            */
/************************************************************/
/*

Author: Ozan UYKUN
Site: http://www.zntr.net
Copyright 2012-2015 zntr.net - Tüm hakları saklıdır.

/******************************************************************************************
* FTP                                                                           		  *
*******************************************************************************************
| Genel Kullanım: Ftp bağlantısı oluşturmak için bir takım ayarlardan oluşur.	          |
******************************************************************************************/

/******************************************************************************************
* HOST                                                                           		  *
*******************************************************************************************
| Genel Kullanım: Bağlantının sağlanacağı host bilgisi.	         						  |
******************************************************************************************/
$config['Ftp']['host'] = '';

/******************************************************************************************
* USER                                                                           		  *
*******************************************************************************************
| Genel Kullanım: Sunucu kullanıcı adı.	         										  |
******************************************************************************************/
$config['Ftp']['user'] = '';

/******************************************************************************************
* PASSWORD                                                                                *
*******************************************************************************************
| Genel Kullanım: Sunucu kullanıcı şifresi.	         									  |
******************************************************************************************/
$config['Ftp']['password'] = '';

/******************************************************************************************
* TIMEOUT                                                                                 *
*******************************************************************************************
| Genel Kullanım: Sunucu bağlantı zaman aşımı süresi.	         						  |
******************************************************************************************/
$config['Ftp']['timeout'] = 90;

/******************************************************************************************
* PORT                                                                                    *
*******************************************************************************************
| Genel Kullanım: Bağlantı port numarası.	         						              |
******************************************************************************************/
$config['Ftp']['port'] = 21;

/******************************************************************************************
* SSL CONNECT                                                                             *
*******************************************************************************************
| Genel Kullanım: SSL kullanılarak sunucu bağlantısı kurulsun mu?.						  |
| 																						  |
| Not: Bu kullanım sürümlere göre desteklenmeyebilir.				         			  |
******************************************************************************************/
$config['Ftp']['sslConnect'] = false;