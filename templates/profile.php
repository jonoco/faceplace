<div id="wall">
	<div class="row row-centered">
		<div class="col-md-4">
			<div class="profile">
				<p>looking at ... <?= $user ?> </p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="comment-form">
				<form action="comment.php" method="post">
					<fieldset>
						<div class="form-group">
			            	<input autofocus class="form-control" name="comment" placeholder="What are you thinking..." type="text"/>
				        </div>
				        <div class="form-group">
				            <button type="submit" class="btn btn-default">Comment</button>
				        </div>
				        <input type="hidden" name="user" value=<?= $user ?>>
					</fieldset>
				</form>
			</div>
			<?php foreach($comments as $c): ?>
				<div class="comment">
					<h4><?= $c["poster"] ?> says...</h3>
					<p><?= $c["comment"] ?></p>
				</div>
			<?php endforeach ?>
		</div>
		<div class="col-md-4">
			<div class="users">
				<p>This will be links to the other weirdos</p>
				<?php foreach($users as $s):?>
					<p class="user-link"><a href=<?= 'user.php?q='.$s["username"] ?>> <?= $s["username"] ?></a></p>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>