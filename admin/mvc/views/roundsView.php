
	<div class="page-header">
		<div class="row">
			<div class="col col6 left">
				<h2 class="page-title">
					Rounds
				</h2>
			</div>
			<div class="col col6 right text-right">

				<a href="<?php echo ADMIN_URL.'rounds/clean/'?>" class="new-item">
					<i class="fa fa-minus-circle"></i> Clean Rounds
				</a>

				<form action="<?php echo ADMIN_URL.'rounds/search'?>" method="POST" class="search-form">
					<label>Search</label>
					<input type="text" name="search" required/>
				</form>

			</div>
		</div>
	</div>

	<?php foreach($rounds_distinct as $round_distinct) { ?>
		<br>
		<div class="row">
			<div class="col col6 left">
				<h2 class="page-title">
					Rounds <?php echo $round_distinct->rounds_number ?>
				</h2>
			</div>
			<div class="col col6 right text-right">

				<a href="<?php echo ADMIN_URL.'rounds/cleanround/'.$round_distinct->rounds_id.'/'?>" class="new-item">
					<i class="fa fa-minus-circle"></i> Clean Round <?php echo $round_distinct->rounds_number ?>
				</a>
			</div>
		</div>
		<br>

	<table class="list-table">
		<tr>
      <th class="text-center">Pic</th>
			<th class="text-left">Name</th>
			<th class="text-center">Status</th>
			<th class="text-center">Votes</th>
      <th class="text-center">Trash</th>
		</tr>

		<?php foreach($rounds as $round) {

			if($round->rounds_number == $round_distinct->rounds_number) { ?>
			<tr>

				<!-- picture -->
				<td class="text-center" style="width:80px;">
					<a href="">
						<div class="welcome-pic add-background" height="30px" data-src="<?php echo $round->user_pic; ?>"></div>
					</a>
				</td>
				<!-- registration name -->
				<td class="text-left">
					<?php echo $round->user_name; ?>
				</td>

				<!-- Status (Viewer or Competidor) -->
				<td>
					<?php if($round->user_status == 0) { ?>
						<a href="<?php echo ADMIN_URL.'rounds/player/'.$round->user_id; ?>" class="list-invisible">
							<i class="fa fa-eye"></i>
						</a>
					<?php } else { ?>
						<a href="<?php echo ADMIN_URL.'rounds/viewer/'.$round->user_id;?>" class="list-visible">
							<i class="fa fa-gamepad"></i>
						</a>
					<?php } ?>

				</td>
				<!-- Status (Viewer or Competidor) -->
				<td>
	        <?php echo $round->round_users_votes; ?>
				</td>

				<!-- Remove -->
				<td>
					<a href="<?php echo ADMIN_URL.'rounds/trash/'.$round->user_id; ?>" class="delete-item">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>
		<?php } ?>
			<!--END ROW 1 -->
		<?php } ?>


	</table>

<?php } ?>
