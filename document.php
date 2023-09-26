<?php
include_once 'conn.php';
require_once 'vendor/autoload.php';

$conn = getconn();

$phpWord = new \PhpOffice\PhpWord\PhpWord();

$section = $phpWord->addSection();
$query = "SELECT id, lname,fname,datebirth,adress,phone,mail FROM customer";
$stmt = $conn->query($query);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$table = $section->addTable();
$table->addRow();
$table->addCell(2000)->addText('ID');
$table->addCell(2000)->addText('lname');
$table->addCell(2000)->addText('fname');
$table->addCell(2000)->addText('datebirth');
$table->addCell(2000)->addText('adress');
$table->addCell(2000)->addText('phone');
$table->addCell(2000)->addText('mail');


foreach ($data as $row) {
    $table->addRow();
    $table->addCell(2000)->addText($row['id']);
    $table->addCell(2000)->addText($row['lname']);
    $table->addCell(2000)->addText($row['fname']);
    $table->addCell(2000)->addText($row['datebirth']);
    $table->addCell(2000)->addText($row['adress']);
    $table->addCell(2000)->addText($row['phone']);
    $table->addCell(2000)->addText($row['mail']);

}

$filename = 'database_data.docx';
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

// Устанавливаем заголовки для скачивания файла
header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="' . $filename . '"'); // Здесь задается имя генерируемого файла
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Expires: 0');

// Отправляем содержимое файла
$objWriter->save("php://output");

// Завершаем выполнение скрипта
exit;
?>
