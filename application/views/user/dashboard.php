<div class="container" style="min-height: 100vh; padding-top: 128px;">
    <div class="row no-margin">
    	<div class="col">
    		<h3 class="fg-black bold letter-spacing-1 align-left" data-aos="fade-up">Dashboard</h1>
    	</div>
		<div class="col">
			<h3 class="fg-black letter-spacing-1 align-right" data-aos="fade-up">Halo, <?php echo $this->session->userdata('name'); ?></h3>
		</div>
		<div class="col-12 padding-top-sm align-center" data-aos="fade-up" data-aos-delay=500>
			<a class="btn btn-success my-3 align-left no-margin" href="<?php echo base_url(); ?>posts/add">Tambah</a>
			<table class="table">
				<thead class="thead-dark">
					<tr​>
						<th scope="col" width="40%">Judul</th>
						<th scope="col" width="30%">URL</th>
						<th scope="col" width="25%">Action</th>
					</tr>
				</thead>
				<tbody style="background-color: #fff">
					<?php foreach($query as $obj){ ?>
						<tr>
							<td><?php echo $obj->title ?></td>
							<td><?php echo $obj->url ?></td>
							<td>
								<center>
									<a class="btn btn-primary" href="<?php echo $obj->url ?>" target="_blank">Lihat</a>
									<a class="btn btn-info" href="<?php echo base_url(); ?>posts/edit/<?php echo $obj->id ?>">Edit</a>
									<a class="btn btn-danger" href="<?php echo base_url(); ?>posts/delete/<?php echo $obj->id ?>">Delete</a>
								</center>
							</td>
						</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>
