<meta charset="utf-8">
<?php
// Підключаємо хедер сайту.
require('base/header.php');

// Видаляємо інформацію про сесію.
session_destroy();

// Направляємо користувача на головну сторінку.
header('Location: index.php');
exit;
