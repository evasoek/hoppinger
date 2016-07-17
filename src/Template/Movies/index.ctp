<h1>Movies</h1>

<div class="row">
	<?php foreach ($movies as $movie): ?>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		<img src="<?= $movie->poster ?>" alt="<?= $movie->title ?>">
		<div class="caption">
			<h3><?= $movie->title ?></h3>
			<p>
				<b>Year: </b> <?= $movie->year ?><br>
				<b>Released: </b> <?= $movie->released ?><br>
				<b>Runtime: </b> <?= $movie->runtime ?><br>
				<b>Genre: </b> <?= $movie->genre ?>
			</p>
			<p><?= $this->Html->link($movie->title, ['action' => 'view', $movie->id], ['class' => 'btn btn-primary']) ?></p>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>