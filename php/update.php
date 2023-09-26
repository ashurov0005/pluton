<?php
// Параметры подключения к базе данных
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "psixobd";

try {
    // Подключение к базе данных через PDO
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", $username, $password);

    // Установка режима обработки ошибок PDO на исключения
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $mail = $_POST['login'];
    $pswd = $_POST['newpas_1'];
    $pswd_repeat = $_POST['newpas_2'];

  


    if ($pswd != $pswd_repeat) {
        # PANIC
        // password not equal
    }

    // SQL запрос
    $sql = "UPDATE customer SET password = $pswd WHERE mail = $mail";

    // Подготовка запроса
    $stmt = $conn->prepare($sql);

    // Привязка параметров
    $stmt->bindParam(':значение1', $значение1);
    $stmt->bindParam(':значение2', $значение2);

    // Установка значений параметров
    $значение1 = "новое_значение1";
    $значение2 = "новое_значение2";

    // Выполнение запроса
    $stmt->execute();

    echo "UPDATE запрос успешно выполнен";
} catch(PDOException $e) {
    echo "Ошибка при выполнении UPDATE запроса: " . $e->getMessage();
}

// Закрытие соединения с базой данных
$conn = null;




