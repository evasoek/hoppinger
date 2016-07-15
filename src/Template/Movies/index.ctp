<h1>Movies</h1>

<table class="table">
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Year</th>
		<th>Rated</th>
		<th>Released</th>
		<th>Runtime</th>
		<th>Genre</th>
		<th>Director</th>
		<th>Writer</th>
		<th>Actors</th>
		<th>Plot</th>
		<th>Language</th>
		<th>Country</th>
		<th>Awards</th>
		<th>Poster</th>
		<th>Metascore</th>
		<th>Imdb rating</th>
		<th>Imdb votes</th>
		<th>Type</th>
		<th>Response</th>
	</tr>
	
	<?php foreach ($movies as $movie): ?>
		<tr>
			<td><?= $movie->imdbid ?></td>
			<td><?= $this->Html->link($movie->title, ['action' => 'view', $movie->id]) ?></td>
			<td><?= $movie->year ?></td>
			<td><?= $movie->rated ?></td>
			<td><?= $movie->released ?></td>
			<td><?= $movie->runtime ?></td>
			<td><?= $movie->genre ?></td>
			<td><?= $movie->director ?></td>
			<td><?= $movie->writer ?></td>
			<td><?= $movie->actors ?></td>
			<td><?= $movie->plot ?></td>
			<td><?= $movie->language ?></td>
			<td><?= $movie->country ?></td>
			<td><?= $movie->awards ?></td>
			<td><?= $movie->poster ?></td>
			<td><?= $movie->metascore ?></td>
			<td><?= $movie->imdbrating ?></td>
			<td><?= $movie->imdbvotes ?></td>
			<td><?= $movie->type ?></td>
			<td><?= $movie->response ?></td>
		</tr>
	<?php endforeach; ?>
</table>