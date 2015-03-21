<div class="wall">
    <div class="comment-form">
        <form class="form" action="comment.php" role="form" method="post">
            <fieldset>
                <div class="form-group">
                    <textarea autofocus class="status-box form-control" name="comment" placeholder="What are you thinking..." rows="2"></textarea>
                </div>
                <div id="comment-submit" class="form-group">
                    <button type="submit" class="btn btn-mini btn-primary status-btn pull-right">Post</button>
                </div>
                <input type="hidden" name="user" value=<?= $user ?>>
            </fieldset>
        </form>
    </div>
    <?php foreach($comments as $comment): ?>
        <?php $time = strtotime($comment["time"]); ?>
        <?php $posted = date("M-d D", $time); ?>
        
        <div class="comment">
	        <div class="media">
	        	<a class="pull-left" href=<?= 'user.php?q='.$comment["poster"] ?>>
					<img class="media-object" src=<?=  $comment['image'] ?> width="64">
				</a>
				<div class="media-body">
					<h3 class="media-heading">
                        <a href=<?= 'user.php?q='.$comment["poster"] ?>>
                            <?= $comment["poster"] ?>
                        </a>
                    </h3>
                    <h6><?= $posted ?></h6>
					<p><?= $comment["comment"] ?></p>
				</div>
			</div>
        </div>
    <?php endforeach ?>
</div>




