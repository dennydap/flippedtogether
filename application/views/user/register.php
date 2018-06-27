<div class="background--landing" id="landing">
	<div class="container d-flex h-100">
	    <div class="row justify-content-center align-self-center no-margin p-5 bg-white">
	    	<div class="col-10 align-center">
			    <h3 class="fg-blue bold">Daftar</h3>
			</div>
			<div class="col-10 align-center mt-3">
				<form method="post" action="<?php echo base_url('user/register'); ?>">
					<label text="Nama">Nama Lengkap</label>
					<input class="form-control" type="text" name="name" required="" />
					<label text="Username">Email</label>
					<input class="form-control" type="text" name="email" required="" />
					<label text="Username">Username</label>
					<input class="form-control" type="text" name="username" required="" />
					<label text="Password">Password</label>
					<input class="form-control" type="password" name="password" required="" />
					<label text="Username">Institusi</label>
					<input class="form-control" type="text" name="institusi" required="" />
					<label text="Username">Pekerjaan</label>
					<input class="form-control" type="text" name="pekerjaan" required="" />
					<button type="submit" class="btn btn-success" style="margin-top: 16px;">Register</button>
				</form>
			</div>
			<div class="col-10 align-center mt-3">
				<a href="<?php echo base_url('user/masuk'); ?>">
					<small id="emailHelp" class="form-text text-muted">Sudah punya akun? Klik disini</small>
				</a>
			</div>
		</div>
	</div>
</div>