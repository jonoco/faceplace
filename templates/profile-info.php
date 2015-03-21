<div class="profile-card">
	<div class="profile-avatar media">
		<a class="pull-left" href="#">
			<img class="media-object" src=<?= $profile[0]["image"] ?> width="64">
		</a>
		<div class="media-body">
			<h3 class="media-heading"><?= $user ?></h3>
			<?php if ($_SESSION['username'] == $user): ?>
				<a href='/change_profile.php'>edit profile</a>
			<?php endif ?>
		</div>
	</div>
	<div class="profile-aboutme">
		<h4>About me...</h4>
		<p><?= $profile[0]["profile"] ?></p>
	</div>
</div>