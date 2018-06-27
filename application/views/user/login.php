<div class="background--landing" id="landing">
	<div class="container d-flex h-100">
	    <div class="row justify-content-center align-self-center no-margin p-5 bg-white">
	    	<div class="col-10 align-center">
			    <h3 class="fg-blue bold">Masuk</h3>
			</div>
			<div class="col-10 align-center mt-3">
				<form method="post" action="<?php echo base_url('user/login'); ?>">
					<div class="form-group">
						<label text="Username">Username</label>
						<input class="form-control" type="text" name="username" />
					</div>
					<div class="form-group">
						<label text="Password">Password</label>
						<input class="form-control" type="password" name="password" />
					</div>
					<button type="submit" class="btn btn-primary" style="margin-top: 16px;">Login</button>
				</form>
			</div>
			<div class="col-10 align-center mt-3">
				<a href="<?php echo base_url('user/daftar'); ?>">
					<small id="emailHelp" class="form-text text-muted">Belum punya akun? Klik disini</small>
				</a>
			</div>
		</div>
	</div>
</div>