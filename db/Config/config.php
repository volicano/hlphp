<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array(
	"DEBUG_SHOW" => true,
	"DB_DRIVER"  => "mysqli",
	"DB_CHARSET" => "utf8",
	"DB_HOST"    => "127.0.0.1",
	"DB_PORT"    => 3306,
	"DB_USER"    => "root",
	"DB_PASSWORD"=> "",
	"DB_DATABASE"=> "mytest",
	"DB_PREFIX"  => ""
);
?>