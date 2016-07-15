<div class="col-sm-12">
	<h1><?= $movie->title; ?></h1>
</div>

<div class="col-sm-4">
	<img src="<?= $movie->poster ?>">
	
	<h3>reviews</h3>
	<ul class="media-list">
		<li class="media">
			<div class="media-left media-top">
				<span class="media-object glyphicon glyphicon-comment"></span>
			</div>
			<div class="media-body">
				<h4 class="media-heading">Middle aligned media</h4>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
			</div>
		</li>
		<li class="media">
			<div class="media-left media-top">
				<span class="media-object glyphicon glyphicon-comment"></span>
			</div>
			<div class="media-body">
				<h4 class="media-heading">Middle aligned media</h4>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
			</div>
		</li>
		<li class="media">
			<div class="media-left media-top">
				<span class="media-object glyphicon glyphicon-comment"></span>
			</div>
			<div class="media-body">
				<h4 class="media-heading">Middle aligned media</h4>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
			</div>
		</li>
	</ul>
</div>
<div class="col-sm-8">
	<ul class="list-group">
	  <li class="list-group-item"><b>Id:</b> <?= $movie->imdbid ?></li>
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