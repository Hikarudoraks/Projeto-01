<?php

/**
*
* Arquivo onde são definidos os helpers
*
* @author Code Universe
*
**/

define('LOCAL_URL', '/curso-webfullstack/projeto01');

// if($env == "dev"){
// 	define('LOCAL_URL', '/ricardo_alexandre/projeto01');
// }
// elseif($env == "prod"){
// 	define('LOCAL_URL', 'https://www.google.com.br/');
// }

return array(
	'URLHelper' => new URLHelper(),
);