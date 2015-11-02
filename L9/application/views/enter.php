<?if(!$unVisibleForm):
echo $msg;?>
<h1>Ви не залогінені!!!</h1>
<?else:?>
<h1>Особистий кабінет користувача <?=$userName?></h1>
<a href="/enter?out=1">Вийти з кабінету!</a>
<?endif;?>