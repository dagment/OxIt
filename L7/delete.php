<?php
// Задаємо заголовок сторінки.
$page_title = 'Delete article';

require('base/header.php');

// Якщо на сторінку зайшов НЕ редактор, тоді даємо у відповідь статус 403 та пишемо повідомлення.
if (!$editor) {
  header('HTTP/1.1 403 Unauthorized');
  print 'Доступ заборонено.';
  // Підключаємо футер та припиняємо роботу скрипта.
  require('base/footer.php');
  exit;
}

require('base/db.php');
if (isset($_POST['yes'])) {
try {
    $stmt = $conn->prepare("DELETE FROM content WHERE id = :id"); //<<<  З цим проблеми!!!
	$stmt->bindParam(':id', $_POST['idd'], PDO::PARAM_INT);//<<<  Чомусь ГЕТ не працює(
    $status = $stmt->execute();

  } catch(PDOException $e) {
    // Виводимо на екран помилку.
    print "ERROR: {$e->getMessage()}";
    // Закриваємо футер.
    require('base/footer.php');
    // Зупиняємо роботу скрипта.
    exit;
}

if ($status) {
    // Вивід повідомлення про вдале видалення матеріалу.
     print "Запис було успішно видалено.";
    exit;
  }
  else {
    // Вивід повідомлення про невдале видалення матеріалу.
    print "Щось завадило видалити статтю.";
  }
}
elseif (isset($_POST['no'])) {
	header('Location: index.php');
}
?>
<!-- Пишемо форму, метод ПОСТ, форма видаляє статтю. -->
<form action="<?php print $_SERVER["PHP_SELF"]; ?>" method="POST">
	<h1> Ви точно бажаєте видалити цю статтю?</h1>
	<input type="submit" name="yes" value="Так">
	<input type="submit" name="no" value="Ні">
	<input type="hidden" name="idd" value="<?php print $_GET['id'];?>">
</form>


<?php
// Підключаємо футер сайту.
require('base/footer.php');
?>