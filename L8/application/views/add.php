<a href="/catalog"><<< Назад</a>
<h1>Добавлення нового запису</h1>
<form action="/add" method="POST">

  <div class="field-item">
    <label for="title">Заголовок</label>
    <input type="text" name="title" id="title" required maxlength="255">
  </div>

  <div class="field-item">
    <label for="short_desc">Короткий зміст</label>
    <textarea name="short_desc" id="short_desc" required maxlength="600"></textarea>
  </div>

  <div class="field-item">
    <label for="full_desc">Повний зміст</label>
    <textarea name="full_desc" id="full_desc" required></textarea>
  </div>

  <div class="field-item">
    <label for="date">День створення</label>
    <input type="date" name="date" id="date" required value="<?php print date('Y-m-d')?>">
    <label for="time">Час створення</label>
    <input type="time" name="time" id="time" required value="<?php print date('G:i')?>">
  </div>

  <input type="submit" name="submit" value="Зберегти">

</form>