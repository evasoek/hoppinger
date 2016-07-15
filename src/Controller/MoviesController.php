<?php
	namespace App\Controller;
	
	use Cake\ORM\TableRegistry;
	
	class MoviesController extends AppController {
		/**
		 * Retrieve IMDB movie
		 *
		 * @param int id. ID of movie to retrieve
		 * @return string movie
		 */
		public function index() {
			// curl
		    $curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, "http://www.omdbapi.com/?i=tt2277860&plot=full&r=json");
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$result = curl_exec($curl);
			curl_close($curl);
			
			$data = json_decode($result, true);
			
			// save to database
			$moviesTable = TableRegistry::get('Movies');
			$movie = $moviesTable->newEntity();
			
			$movie->imdbid = $data['imdbID'];
			$movie->title = $data['Title'];
			$movie->year = $data['Year'];
			$movie->rated = $data['Rated'];
			$movie->released = $data['Released'];
			$movie->runtime = $data['Runtime'];
			$movie->genre = $data['Genre'];
			$movie->director = $data['Director'];
			$movie->writer = $data['Writer'];
			$movie->actors = $data['Actors'];
			$movie->plot = $data['Plot'];
			$movie->language = $data['Language'];
			$movie->country = $data['Country'];
			$movie->awards = $data['Awards'];
			$movie->poster = $data['Poster'];
			$movie->metascore = $data['Metascore'];
			$movie->imdbrating = $data['imdbRating'];
			$movie->imdbvotes = $data['imdbVotes'];
			$movie->type = $data['Type'];
			$movie->response = $data['Response'];
			
			if ($moviesTable->save($movie)) {
			    $id = $movie->imdbid;
			}
			
			$movies = $this->Movies->find('all');
			$this->set(compact('movies'));
	    }
	    
	    public function view($id = null) {
	        $movie = $this->Movies->get($id);
	        $this->set(compact('movie'));
	    }
	}
?>