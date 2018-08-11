<?php $fields = ['Title', 'Body', 'Link']; ?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
	<div class="card bg-light mb-5 p-5">
		<div class="card-block">
			<div class=" form-group row">
				<div class="col-md-12">
					<h4 class="card-title">Share Something</h4>
				</div>
			</div>
			<?php foreach($fields as $field) : ?>
				<div class="form-group row">
					<label class="col-md-2"><?php echo $field ?></label>
					<div class="col-md-10">
						<input type="text" name="<?php echo strtolower($field); ?>" class="form-control" />
					</div>
				</div>
			<?php endforeach; ?>
			<div class="form-group row">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" name="share_btn" value="Share Now" class="btn btn-primary" />
					<a class="btn btn-danger" href="<?php echo ROOT_URL ?>shares">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>