<?php
if(extension_loaded('zlib') && !ini_get('zlib.output_compression')){
	if(!ob_start("ob_gzhandler")) ob_start();
}else{
	ob_start();
}
header("cache-control: must-revalidate");
$offset = 60 * 10000;
$expire = "expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
header($expire);
header("content-type: text/javascript; charset: UTF-8");
// global
include('jquery.js'); echo "\n";
include('cookie.js'); echo "\n";
include('showpassword.js'); echo "\n";
include('functions.js'); echo "\n";
ob_end_flush();
?>