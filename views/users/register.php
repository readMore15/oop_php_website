<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
	<div class="card bg-light mb-5 p-5">
		<div class="card-block">
			<div class=" form-group row">
				<div class="col-md-12">
					<h4 class="card-title">Register User</h4>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-2">Name</label>
				<div class="col-md-10">
					<input required type="text" name="name" class="form-control" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-2">Email</label>
				<div class="col-md-10">
					<input required type="email" name="email" class="form-control" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-2">Password</label>
				<div class="col-md-10">
					<input required type="password" name="password" class="form-control" />
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" name="register_btn" value="Register" class="btn btn-primary" />
				</div>
			</div>
		</div>
	</div>
</form>