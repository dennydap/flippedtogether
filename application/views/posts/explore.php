<div class="container" style="min-height: 100vh; padding-top: 128px;">
	<h1 class="bold text-center">Jelajahi</h1>
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
						<div class="row m-3">
							<div class="media">
								<i class="fas fa-user-circle fa-3x" style="width: 64px; height: 64px;"></i>
								<a href="<?php echo base_url('user/view/' . $obj->id); ?>">
									<div class="media-body">
										<h5 class="align-self-center"><?php echo $obj->name ?></h5>
										<small><?php echo $obj->institusi ?></small>
									</div>
								</a>
							</div>
						</div>
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
