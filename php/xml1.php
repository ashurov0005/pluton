<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=library', 'root', 'root'); // подключение к базе данных
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $xml = simplexml_load_file('import.xml'); // загрузка XML файла в объект SimpleXMLElement
    
    foreach ($xml->item as $item) { // проходим по каждому элементу 'item' в XML
        $values = [];
        $placeholders = [];
        
        foreach ($item as $key => $value) { // проходим по каждому элементу внутри 'item'
            $values[] = (string) $value; // получаем значение элемента
            $placeholders[] = '?'; // создаем placeholder для использования в SQL-запросе
        }
        
        $query = "INSERT INTO articul (" . implode(', ', array_keys((array) $item)) . ") VALUES (" . implode(', ', $placeholders) . ")"; // создание SQL-запроса
        $stmt = $pdo->prepare($query);
        $stmt->execute($values); // выполнение запроса с передачей значений
        
        echo "Данные успешно импортированы в таблицу.";
    }
} catch (PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
?>