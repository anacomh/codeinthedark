
	<div class="page-header">
		<div class="row">
			<div class="col col6 left">
				<h2 class="page-title">
					Users
				</h2>
			</div>
			<div class="col col6 right text-right">

				<a href="<?php echo ADMIN_URL.'users/create/'; ?>" class="new-item">
					<i class="fa fa-plus-circle"></i> New
				</a>

				<form action="<?php echo ADMIN_URL.'users/search'?>" method="POST" class="search-form">
					<label>Search</label>
					<input type="text" name="search" required/>
				</form>

			</div>
		</div>
	</div>


	<table class="list-table">
		<tr>
			<th class="text-left">Pic</th>
			<th class="text-left">Name</th>
			<th class="text-left">Email</th>
			<th>Confirmation</th>
			<th>Status</th>
			<th>Lucky</th>
			<th>Edit</th>
			<th>Trash</th>
		</tr>


		<?php foreach($users as $user) { ?>
			<tr>
				<!-- picture -->
				<td class="text-left">
					<a href="">
						<div class="welcome-pic add-background" height="30px" data-src="<?php echo $user->user_pic; ?>"></div>
					</a>
				</td>
				<!-- registration name -->
				<td class="text-left">
					<?php echo $user->user_name; ?>
				</td>
				<!-- email -->
				<td class="text-left">
					<p><?php echo $user->user_email; ?></p>
				</td>

				<!-- Confirmation -->
				<td>
					<?php if($user->user_confirm == 0) { ?>
					<a href="<?php echo ADMIN_URL.'users/noconfirm/'.$user->user_id; ?>" class="list-invisible">
						<i class="fa fa-times"></i>
					</a>
					<?php } else { ?>
					<a href="<?php echo ADMIN_URL.'users/confirm/'.$user->user_id; ?>" class="list-visible">
						<i class="fa fa-check"></i>
					</a>
					<?php } ?>
				</td>
				<!-- Status (Viewer or Competidor) -->
				<td>
					<?php if($user->user_status == 0) { ?>
						<a href="<?php echo ADMIN_URL.'users/player/'.$user->user_id; ?>" class="list-visible">
							<i class="fa fa-eye"></i>
						</a>
					<?php } else { ?>
						<a href="<?php echo ADMIN_URL.'users/viewer/'.$user->user_id;?>" class="list-invisible">
							<i class="fa fa-gamepad"></i>
						</a>
					<?php } ?>

				</td>

				<!-- Lucky (Drawn) -->
				<td>
					<?php if($user->user_drawn == 0) { ?>
					<a href="<?php echo ADMIN_URL.'users/drawn/'.$user->user_id; ?>" class="list-invisible">
						<i class="fa fa-times"></i>
					</a>
					<?php } else { ?>
					<a href="<?php echo ADMIN_URL.'users/nodrawn/'.$user->user_id; ?>" class="list-visible">
						<i class="fa fa-check"></i>
					</a>
					<?php } ?>
				</td>

				<!-- Edit-->
				<td>
					<a href="<?php echo ADMIN_URL.'users/detail/'.$user->user_id.'/'; ?>">
						<i class="fa fa-edit"></i>
					</a>
				</td>
				<!-- Remove -->
				<td>
					<a href="<?php echo ADMIN_URL.'users/trash/'.$user->user_id; ?>" class="delete-item">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>
		<?php } ?>

		<!--END ROW 1 -->


	</table>
