<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Hoppinger IMDB';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    
    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'); ?>
    <?= $this->Html->script('bootstrap'); ?>
    <?= $this->Html->script('npm'); ?>
    <?= $this->Html->script('custom'); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://localhost/hoppinger">Hoppinger IMDB</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="http://localhost/hoppinger">Home</a></li>
					<li><a href="http://localhost/hoppinger/pages/opdracht">Opdracht</a></li>
					<li><a href="http://localhost/hoppinger/pages/code">Code</a></li>
					<li><a href="http://localhost/hoppinger/pages/proces">Proces</a></li>
					<li><a href="https://github.com/evasoek/hoppinger">Github</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	
	<?= $this->Flash->render() ?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?= $this->fetch('content') ?>
			</div>
		</div>
	</div>
	
	<footer class="footer">
		<div class="container">
			<p class="text-muted">&copy; Eva Soek.</p>
		</div>
	</footer>
</body>
</html>
