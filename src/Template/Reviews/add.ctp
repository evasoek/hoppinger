<h4>Schrijf een review</h4>
<?php
	echo $this->Form->create($review);
	echo $this->Form->input('title', ['class' => 'form-control']);
	echo '<b>body</b>';
	echo $this->Form->textarea('body', ['class' => 'form-control', 'rows' => '5', 'cols' => '5']);
	echo $this->Form->button('Save review', ['class' => 'btn btn-primary']);
	//<?php echo $html->link('Add Comment', array('controller'=>'Comments','action'=>'add',$post->id))
	echo $this->Form->end();
?>