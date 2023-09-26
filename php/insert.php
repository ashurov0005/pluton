<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "psixobd";

try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //Получение данных из формы
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail'];

        $sql = "INSERT INTO customer (fName, lName, adress, phone,mail) VALUES (:fname, :lname, :adress, :phone, :mail)";
    
        // Подготовка и выполнение запроса
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':adress', $adress);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
    
    echo "Данные успешно отправлено!!!.";
} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}

$conn = null;