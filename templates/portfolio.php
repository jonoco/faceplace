<div>
	<table id="portfolio">
		<thead>
			<tr>
				<th>Name</th>
				<th>Symbol</th>
				<th>Shares</th>
				<th>Price</th>
				<th>Value</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($positions as $p): ?>
				<tr>
					<td><?= $p["name"] ?></td>
					<td><?= $p["symbol"] ?></td>
					<td><?= $p["shares"] ?></td>
					<td><?= $p["price"] ?></td>
					<td>$<?= number_format(($p["price"]*$p["shares"]), 2) ?></td>
				</tr>
			<?php endforeach ?>
			<tr id="portfolio-cash">
				<td colspan="4">CASH</td>
				<td>$<?= number_format($cash, 2) ?></td>
			</tr>
		</tbody>
	</table>
</div>
