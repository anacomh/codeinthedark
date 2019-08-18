
	<div class="page-header">
		<h2 class="page-title">
			Users
		</h2>
	</div>

	<div class="page-container">

		<form action="<?php echo ADMIN_URL.'users/update/'.$users->user_id; ?>" method="POST" enctype="multipart/form-data" class="editor-form">

			<label>Name</label>
			<input type="text" name="name" value="<?php echo $users->user_name; ?>" />

			<label>Email</label>
			<input type="text" name="email" value="<?php echo $users->user_email; ?>" />

			<label>Facebook</label>
			<input type="text" name="facebook" value="<?php echo $users->user_facebook; ?>" />

			<!-- Confirmation -->
			<td>
				<label>Confirmation</label>
				<?php if($users->user_confirm == 0) { ?>
				<a href="<?php echo ADMIN_URL.'users/noconfirma/'.$users->user_id; ?>" class="list-invisible">
					<i class="fa fa-times"></i>
				</a>
				<?php } else { ?>
				<a href="<?php echo ADMIN_URL.'users/confirma/'.$users->user_id; ?>" class="list-visible">
					<i class="fa fa-check"></i>
				</a>
				<?php } ?>
			</td>

			<!-- Lucky (Drawn) -->
			<td>
				<label>Lucky</label>
				<?php if($users->user_drawn == 0) { ?>
				<a href="<?php echo ADMIN_URL.'users/lucky/'.$users->user_id; ?>" class="list-invisible">
					<i class="fa fa-times"></i>
				</a>
				<?php } else { ?>
				<a href="<?php echo ADMIN_URL.'users/nolucky/'.$users->user_id; ?>" class="list-visible">
					<i class="fa fa-check"></i>
				</a>
				<?php } ?>
			</td>

			<label>Pic</label>
			<?php if(((substr($users->user_pic, 0, 8) == 'https://')) || ((substr($users->user_pic, 0, 7) == 'http://')) )  { ?>
				<img src="<?php echo $users->user_pic; ?>" class="input-image">
			<?php }else{ ?>
				<img src="<?php echo MEDIA_URL.$users->user_pic; ?>" class="input-image">
			<?php } ?>
			<input type="file" name="image"/>

			<input type="submit" value="Save"/>

		</form>


	</div>


	<!-- Include and initialize CKeditor-->
	<script src="<?php echo ADMIN_JS.'ckeditor/ckeditor.js'; ?>"></script>
	<script>CKEDITOR.replace('text-editor');</script>
