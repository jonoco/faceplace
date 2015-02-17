<div class="users">
    <ul class="nav nav-tabs nav-stacked">
        <h4>Users</h4>
        <?php foreach($users as $s):?>
            <li><a href=<?= 'user.php?q='.$s["username"] ?>> <?= $s["username"] ?></a></li>
        <?php endforeach ?>
    </ul>
</div>
