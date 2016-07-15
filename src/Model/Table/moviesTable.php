<?php
	namespace App\Model\Table;
	
	use Cake\ORM\Table;
	
	class MoviesTable extends Table {
		public $primaryKey = 'imdbid';
		
	    public function initialize(array $config) {
	        $this->addBehavior('Timestamp');
	    }
	}
?>