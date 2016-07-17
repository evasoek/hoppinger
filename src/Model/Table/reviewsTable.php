<?php
	namespace App\Model\Table;
	
	use Cake\ORM\Table;
	
	class ReviewsTable extends Table {
		public function initialize(array $config) {
			$this->addBehavior('Timestamp');
			$this->belongsTo('Movies', [
				'foreignKey' => 'movie_id'
			]);
		}
	}
?>