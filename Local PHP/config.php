<?php
/*
 *	config.php
 *
 *	Ultima Online Paperdoll Image Generator
 *	Vorspire - http://core.vita-nex.com
 *
 *	License: MIT
 *	Created: 05/2011
 *	Updated: 12/17/2016 - tbsampson
 */
/*Database*/
define("DB_SERVER", "localhost");
define("DB_PORT", "3306");
define("DB_NAME", "myrunuo");
define("DB_USER","root");
define("DB_PASS","");

/*Character Tables*/
define("TBL_CHARS", "myrunuo_characters");
define("TBL_CHARS_LAYERS", "myrunuo_characters_layers");
/*Misc*/
/*
 *	When enabled, outputs plain text debug logs of the entire generation process.
 */
define("DEBUG", true);
/*
 *	Support client files from High Seas and above. 
 *	Typically client 7.0.9+
 *	TileData.mul uses 4 bytes (Int32) to store the Flags data in clients before 7.0.9
 *	TileData.mul uses 8 bytes (Int64) to store the Flags data in clients after and including 7.0.9
 */
define("POST_HS", true);
/*
 *	Support client files from Age of Shadows and above.
 *	TileData.mul uses 0x400000 for the Wearable flag in clients before AOS.
 *	TileData.mul uses 0x404002 for the Wearable flag in clients after and including AOS.
 *	If POST_HS is true, POST_AOS is ignored.
 */
define("POST_AOS", true);
/*MUL File Path*/
define("MUL_PATH", "OLD_FILES/");
?>
