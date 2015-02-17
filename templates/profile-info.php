<div class="profile">
	<div class="media">
		<a class="pull-left" href="#">
			<img class="media-object" src=<?= $profile[0]["image"] ?> width="64">
		</a>
		<div class="media-body">
			<h3 class="media-heading"><?= $user ?></h3>
			<p><a href='/change_profile.php'><?= $profile[0]["profile"] ?></a></p>
		</div>
	</div>
</div>