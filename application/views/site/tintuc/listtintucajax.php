		<?php 
		foreach ($news as $item) {
		?>
			<div class="post">
				<h3 class='head3'><a href="index.php/tintuc/details/<?=$item['id']?>"><?=$item['title']?></a></h3>

				<p class='content'>
					<?=nl2br($item['content'])?><br />
					<a style="float: right;" class="readmore" href="index.php/tintuc/details/<?=$item['id']?>">read more...</a>
				</p>
			</div><br /><br />
		<?php 
		}
		?>