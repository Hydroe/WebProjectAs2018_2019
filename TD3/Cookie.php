

<?php

$_var = "blabla";
$_SESSION = ""

setcookie("TestCookie", "OK", time()+3600);
//echo $_COOKIE['TestCookie'];
//setcookie("TestCookie", "", time()-1);

$tab_cookies = serialize($_COOKIE['TestCookie']); 
print_r($tab_cookies);

echo '</br>';

$tab_cookies = unserialize($tab_cookies);
print_r($tab_cookies);

?>