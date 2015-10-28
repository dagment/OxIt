<a href="/catalog"><<< Назад</a>
<h1>Видалення запису </h1>
<!-- Форма видалення статті -->
<form action="/delete" method="POST">
	<h2> Ви точно бажаєте видалити цю статтю?</h1>
	<input type="submit" name="yes" value="Так">
	<input type="submit" name="no" value="Ні">
	<input type="hidden" name="idd" value="<?=$_REQUEST['id'];?>">
</form>
</form>