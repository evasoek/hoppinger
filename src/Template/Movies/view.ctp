<div class="col-sm-12">
	<h1><?= $movie->title; ?></h1>
</div>

<div class="col-sm-4">
	<img src="<?= $movie->poster ?>">
	
	<h3>reviews</h3>
	
	<p>
		Avg rating: <span class="label label-primary"><?php echo $review_avg; ?></span>
	</p>
	
	<hr>
	
	<ul class="media-list">
		<?php foreach ($reviews as $review): ?>
			<li class="media">
				<div class="media-left media-top">
					<span class="media-object glyphicon glyphicon-comment"></span>
				</div>
				<div class="media-body">
					<h4 class="media-heading"><?= $review->title ?></h4>
					<b>Rating:</b> <?= $review->rating ?><br>
					<?= $review->body ?>
				</div>
				<b>Author:</b> <?= $review->author ?>
			</li>
		<?php endforeach; ?>
	</ul>
	
	<hr>
	
	<h4>Schrijf een review</h4>
	<?php
		echo $this->Form->create();
		
		echo $this->Form->radio(
			'rating',
			[
				['value' => '1', 'text' => '1'],
				['value' => '2', 'text' => '2'],
				['value' => '3', 'text' => '3'],
				['value' => '4', 'text' => '4'],
				['value' => '5', 'text' => '5'],
				['value' => '6', 'text' => '6'],
				['value' => '7', 'text' => '7'],
				['value' => '8', 'text' => '8'],
				['value' => '9', 'text' => '9'],
				['value' => '10', 'text' => '10']
			]
		);
		
		
		echo $this->Form->input('title', ['class' => 'form-control']);
		echo '<b>body</b>';
		echo $this->Form->textarea('body', ['class' => 'form-control', 'rows' => '5', 'cols' => '5']);
		echo $this->Form->button('Save review', ['class' => 'btn btn-primary']);
		echo $this->Form->end();
	?>
	
</div>
<div class="col-sm-8">
	<ul class="list-group">
	  <li class="list-group-item"><b>Id:</b> <?= $movie->id ?></li>
	  <li class="list-group-item"><b>Title:</b> <?= $movie->title ?></li>
	  <li class="list-group-item"><b>Year:</b> <?= $movie->year ?></li>
	  <li class="list-group-item"><b>Rated:</b> <?= $movie->rated ?></li>
	  <li class="list-group-item"><b>Released:</b> <?= $movie->released ?></li>
	  <li class="list-group-item"><b>Runtime:</b> <?= $movie->runtime ?></li>
	  <li class="list-group-item"><b>Genre:</b> <?= $movie->genre ?></li>
	  <li class="list-group-item"><b>Director:</b> <?= $movie->director ?></li>
	  <li class="list-group-item"><b>Writer:</b> <?= $movie->writer ?></li>
	  <li class="list-group-item"><b>Actors:</b> <?= $movie->actors ?></li>
	  <li class="list-group-item"><b>Plot:</b> <?= $movie->plot ?></li>
	  <li class="list-group-item"><b>Language:</b> <?= $movie->language ?></li>
	  <li class="list-group-item"><b>Country:</b> <?= $movie->country ?></li>
	  <li class="list-group-item"><b>Awards:</b> <?= $movie->awards ?></li>
	  <li class="list-group-item"><b>Metascore:</b> <?= $movie->metascore ?></li>
	  <li class="list-group-item"><b>Imdb Rating:</b> <?= $movie->imdbrating ?></li>
	  <li class="list-group-item"><b>Imdb Votes:</b> <?= $movie->imdbvotes ?></li>
	  <li class="list-group-item"><b>Type:</b> <?= $movie->type ?></li>
	  <li class="list-group-item"><b>Response:</b> <?= $movie->response ?></li>
	</ul>
</div>