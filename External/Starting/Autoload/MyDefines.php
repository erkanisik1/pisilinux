<?php  
//$browser_lang = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
//$lang = substr($browser_lang, 0, 2);
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);


//define('LANG', $lang);
if (isset($_COOKIE['country'])) {
	$lang = $_COOKIE['country'];
}else{
	$lang = $lang;
}
ML::lang($lang);
Lang::set($lang);
define('LANG', $lang);
define('THEMA_NAME','pisilinux/');
define('THEMA', 'Projects/Frontend/Views/'.THEMA_NAME);
define('MEMBER','Projects/Members/Views/');
define('DEVELOP','Projects/Develop/Views/');
define('ADMIN','Projects/Panel/Views/');

if(Cookie::select('username')){
	define('USERNAME',Cookie::select('username'));
}else{
	define('USERNAME',Session::select('username'));
}

if(Cookie::select('userid')){
	define('USERID',Cookie::select('userid'));
}else{
	define('USERID',Session::select('userid'));
}

