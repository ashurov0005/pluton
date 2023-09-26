<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=psixobd', 'root', 'root'); // подключение к базе данных
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "SELECT * FROM customer"; // ваш SQL-запрос для выборки данных из таблицы
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Создание объекта SimpleXMLElement для создания структуры XML
    $xml = new SimpleXMLElement('<data></data>');
    
    // Проход по данным и добавление элементов XML
    foreach ($data as $row) {
        $item = $xml->addChild('item');
        foreach ($row as $key => $value) {
            $item->addChild($key, $value);
        }
    }
    
    // Сохранение XML в файл
    $xml->asXML('xml/export.xml');
    
    echo "Таблица успешно экспортирована в XML файл.";
} catch (PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
?>
