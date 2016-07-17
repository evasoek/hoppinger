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
			
			$movie->id = $data['imdbID'];
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
			    $id = $movie->id;
			}
			
			$movies = $this->Movies->find('all');
			$this->set(compact('movies'));
	    }
	    
	    public function view($id = null) {
		    // get movie
	        $movie = $this->Movies->get($id, [
	        	'contain' => ['Reviews']
	        ]);
	        $this->set(compact('movie'));
	        
	        // get reviews
	        $this->set('reviews', $movie['reviews']);
	        
			$movie_reviews = $movie['reviews'];
			$movie_ratings = array();
			foreach ($movie_reviews as $movie_review) {
				$rating = $movie_review['rating'];
				$movie_ratings[] = $rating;
			}
			$rating_avg = array_sum($movie_ratings)/count($movie_ratings);
			$this->set('review_avg', $rating_avg);
	        
	        // save review
	        if ($this->request->is('post')) {
		        $moviesTable = TableRegistry::get('Movies');
		        $review = $moviesTable->Reviews->newEntity();
		        
		        // fill data
		        $data = $this->request->data;
		        $review->title = $data['title'];
		        $review->body = $data['body'];
		        $review->rating = $data['rating'];
				
				// get ip
				$ipaddress = '';
				if (getenv('HTTP_CLIENT_IP'))
					$ipaddress = getenv('HTTP_CLIENT_IP');
				else if(getenv('HTTP_X_FORWARDED_FOR'))
					$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
				else if(getenv('HTTP_X_FORWARDED'))
					$ipaddress = getenv('HTTP_X_FORWARDED');
				else if(getenv('HTTP_FORWARDED_FOR'))
					$ipaddress = getenv('HTTP_FORWARDED_FOR');
				else if(getenv('HTTP_FORWARDED'))
					$ipaddress = getenv('HTTP_FORWARDED');
				else if(getenv('REMOTE_ADDR'))
					$ipaddress = getenv('REMOTE_ADDR');
				else
					$ipaddress = 'UNKNOWN';
		        
		        $review->author = $ipaddress;
		        
		        // set review
		        $movie_review = $moviesTable->get($id);
				$movie_review->reviews = [$review];
				
				// save review
				if ($moviesTable->save($movie_review)) {
					$this->Flash->success(__('Your review has been added.'));
					return $this->redirect(['action' => 'view', $id]);
				}
				$this->Flash->error(__('Unable to add your review.'));
			}
	    }
	}
?>