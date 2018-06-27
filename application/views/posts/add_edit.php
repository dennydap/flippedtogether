<div class="container d-flex" style="min-height: 100vh; padding-top: 128px; padding-bottom: 128px;">
    <div class="row justify-content-center align-self-center no-margin " data-aos="fade-up">
    	<div class="col-12 align-center">
    		<?php if($mode == "add") { ?> 
		    	<h1 class="fg-black bold">Tambah Post</h1>
		    <?php } else { ?> 
		    	<h1 class="fg-black bold">Edit Post</h1>
		    <?php } ?>
		</div>
		<div class="col-12 align-center mt-3">
			<?php if($mode == "add") { ?>
			<form method="post" action="<?php echo base_url('posts/create'); ?>">
				<label text="Nama">Judul</label>
				<input class="form-control" type="text" name="title" required="" />
				<label text="Username">Captions</label>
				<textarea class="form-control" type="text" name="captions" required=""></textarea>
				<label text="Username">URL Youtube</label>
				<input class="form-control" type="text" name="url" required="" />
				<button type="submit" class="btn btn-success" style="margin-top: 16px;">Post</button>
				<a href="<?php echo base_url('user/dashboard'); ?>" class="btn btn-danger" style="margin-top: 16px;">Batal</a>
			</form>
			<?php } else { ?>
			<form method="post" action="<?php echo base_url('posts/update/'.$query[0]->id); ?>">
				<label text="Nama">Judul</label>
				<input class="form-control" type="text" name="title" required="" value="<?php echo $query[0]->title; ?>" />
				<label text="Username">Captions</label>
				<textarea class="form-control" type="text" name="captions" required=""><?php echo $query[0]->captions ?></textarea>
				<label text="Username">URL Youtube</label>
				<input class="form-control" type="text" name="url" required="" value="<?php echo $query[0]->url ?>" />
				<button type="submit" class="btn btn-success" style="margin-top: 16px;">Edit</button>
				<a href="<?php echo base_url('user/dashboard'); ?>" class="btn btn-danger" style="margin-top: 16px;">Batal</a>
			</form>
			<?php } ?>
		</div>
	</div>
</div>