<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_fenreg = "localhost";
$database_fenreg = "fenreg";
$username_fenreg = "root";
$password_fenreg = "";
$fenreg = mysql_pconnect($hostname_fenreg, $username_fenreg, $password_fenreg) or trigger_error(mysql_error(),E_USER_ERROR); 
?>