<?
//представление личного кабинета (страница личного кабинета)
if(!$unVisibleForm):?>
<h1>Вхід у особистий кабінет</h1>
<?endif;?>
<?

if(!$unVisibleForm):
echo $msg;
?>
<form action="/enter" method="POST">
  Логін: &nbsp;<input type="text" name="login" value="<?=$login?>" /><br />
  Пароль: <input type="password" name="pass" value="<?=$pass?>" /><br />
  <input type="submit" value="Вхід" />
</form>
<?else:?>
<h1>Особистий кабінет користувача <?=$userName?></h1>
<a href="/enter?out=1">Вийти з кабінету!</a>
<?endif;?>
