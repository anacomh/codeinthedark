
	<div class="page-header">
		<h2 class="page-title">
			Options
		</h2>
	</div>

	<div class="page-container">

		<form action="<?php echo ADMIN_URL.'options/save' ?>" method="POST" enctype="multipart/form-data" class="editor-form">

			<label>Limite da Votação</label>
			<input type="text" name="options[max_votes]" value="<?php echo $options->max_votes; ?>" />



			<input type="submit" value="Save"/>

		</form>


	</div>


	<!-- Include and initialize CKeditor-->
	<script src="<?php echo ADMIN_JS.'ckeditor/ckeditor.js'; ?>"></script>
	<script>CKEDITOR.replace('text-editor');</script>
