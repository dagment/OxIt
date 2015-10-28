<h1>Статті</h1>
<?

//Представлення блогу
foreach($Items as $item)
		{
			if($i%3==0):?> 
			<div style="clear:both;"></div>
			<?endif;?>
			<div class="info">
				<h2>
				<a href="/article/<?=$item["title"]?>"><?=$item["title"]?></a>
				</h2>
				<div class="article_short">
				<?=$item["short_desc"]?>
				</div>
				<div class="timestamp">
				  <!-- Вивід відформатованої дати створення. -->
				  <?php print date('d/m/Y G:i', $item['timestamp']); ?>
				</div>
				<? if($_SESSION["User"]!=""): ?>
					<a href="/edit/<?=$item['title']; ?>">Редагувати</a>
					<a href="/delete/<?=$item['title']; ?>">Видалити</a>
				<? endif; ?>
			</div>
			<hr>
		<?
			$i++;
		}
		if($_SESSION["User"]!=""):
		?>
<a href="add" type="button">Додати статтю<a>	
<? endif; ?>