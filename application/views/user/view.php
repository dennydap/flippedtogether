<div class="container" style="min-height: 100vh; padding-top: 128px;">
	<?php foreach($profile as $profile) { ?>
		<h1 class="bold text-center"><?php echo $profile->name ?></h1>
		<h3 class="text-center"><?php echo $profile->institusi ?></h3>
	<?php } ?>
	<div class="row mt-5">
		<?php foreach($query as $obj){ ?>
			<div class="col-12 col-lg-4 my-3">
				<div class="card">
					<img class="card-img-top" 
						src=
							<?php 
								parse_str(parse_url($obj->url, PHP_URL_QUERY ), $ytarray);
								echo "http://img.youtube.com/vi/" . $ytarray['v'] . "/mqdefault.jpg";
							?>
						alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title bold"><?php echo $obj->title; ?></h5>
						<p class="card-text">
							<?php 
								if (strlen($obj->captions) > 8) {
									$offset = (64 - 3) - strlen($obj->captions);
		    						$s = substr($obj->captions, 0, strrpos($obj->captions, ' ', $offset)) . '...';
		    						echo $s;
								} else {
									echo $obj->captions;
								}
							 ?>
						</p>
						<a href=<?php echo $obj->url ?> class="btn btn-primary btn-block" target="_blank">Watch</a>
					</div>
				</div>
			</div>
		<?php }?>
	</div>
</div>
