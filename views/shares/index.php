<div>
	<a class="btn btn-success btn-share mb-5" href="<?php echo ROOT_URL ?>shares/add">Share Something</a>

	<?php foreach($viewmodel as $item) : ?>
		<div class="card bg-light mb-5 p-5">
			<div class="card-block">
				<h3><?php echo $item['title']; ?></h3>

				<small><?php echo $item['create_date']; ?></small>
				<hr/>
				<p class="mb-5"><?php echo $item['body']; ?></p>
				<a class="btn btn-secondary" href="<?php echo $item['link']; ?>" target="_blank">Go to Website</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>