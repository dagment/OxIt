<form action="/edit" method="POST">

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
    <label for="date">День редагування</label>
    <input type="date" name="date" id="date" required value="<?php print date('Y-m-d')?>">
    <label for="time">Час редагування</label>
    <input type="time" name="time" id="time" required value="<?php print date('G:i')?>">
  </div>
	<input type="hidden" name="idd" value="<?=$_REQUEST['id'];?>">
  <input type="submit" name="submit" value="Зберегти">

</form>