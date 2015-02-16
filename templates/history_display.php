<div>
	<table id="history">
		<thead>
			<tr>
				<th>Symbol</th>
				<th>Shares</th>
				<th>Price</th>
				<th>Transaction</th>
				<th>Time</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($positions as $p): ?>
				<tr>
					<td><?= $p["symbol"] ?></td>
					<td><?= $p["shares"] ?></td>
					<td><?= $p["price"] ?></td>
					<td>$<?= $p["transaction"] ?></td>
					<td>$<?= $p["time"] ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
