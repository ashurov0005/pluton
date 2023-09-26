<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];
    $time = date('Y-m-d H:i:s');

    // Открываем файл на запись (флаг 'a' означает, что данные будут добавлены в конец файла)
    $file = fopen('log.txt', 'a');
    fwrite($file, "$time: $message\n");
    fclose($file);
}

// Читаем содержимое лог-файла
$logContent = file_get_contents('log.txt');
?>
```