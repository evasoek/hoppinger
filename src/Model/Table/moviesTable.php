<?php
	namespace App\Model\Table;
	
	use Cake\ORM\Table;
	
	class MoviesTable extends Table {
	    public function initialize(array $config) {
	        $this->addBehavior('Timestamp');
	        $this->hasMany('Reviews', ['foreignKey' => 'movie_id']);
	    }
	}
?>