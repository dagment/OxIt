<a href="/catalog"><<< Назад</a>
<h1><?=$article['name']?></h1>
<div class="article">
	<h1><?php print $article['title']; ?></h1>
	<div class="timestamp">
    <!-- Вивід відформатованої дати створення. -->
    <?php print date('d/m/Y G:i', $article['timestamp']); ?>
    </div>
	<div class="full_desc">
	<?=$article['full_desc']?>
	</div>
</div>