<style>
li {
	font-size: 24px;
}

</style>

<ul>
	<li><?php print("Name: " . $name); ?></li>
	<li><?php print("Symbol: " . $symbol); ?></li>
	<li><?php print("Price: " . number_format($price, 4)); ?></li>
</ul>

<a href="javascript:history.go(-1);">Back</a>