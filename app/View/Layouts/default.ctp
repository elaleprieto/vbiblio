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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Biblioteca Vigil');
$cakeVersion = __d('cake_dev', 'Biblioteca Vigil')
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');

		echo $this->Html->css(array('/bower_components/bootstrap/dist/css/bootstrap.min.css'
			, '/bower_components/bootstrap/dist/css/bootstrap-theme.min.css'
			, '/bower_components/fontawesome/css/font-awesome.min.css'
			, 'layouts/default'
		));
		echo $this->fetch('css');
	?>
</head>
<body data-ng-app="App">
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">Biblioteca Vigil</a>
				<ul class="nav navbar-nav">
					<!-- Socios -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Socios<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><?php echo $this->Html->link('Nuevo', array('controller' => 'socios', 'action' => 'add')); ?></li>
							<li><?php echo $this->Html->link('Listar Socios', array('controller' => 'socios', 'action' => 'index')); ?></li>
						</ul>
					</li>
					<!-- Cuotas -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Cuotas<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><?php echo $this->Html->link('Nuevo', array('controller' => 'cuotas', 'action' => 'add')); ?></li>
							<li><?php echo $this->Html->link('Listar Cuotas', array('controller' => 'cuotas', 'action' => 'index')); ?></li>
						</ul>
					</li>
					<!-- Recibos -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Recibos<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><?php echo $this->Html->link('Nuevo', array('controller' => 'recibos', 'action' => 'add')); ?></li>
							<li><?php echo $this->Html->link('Listar Recibos', array('controller' => 'recibos', 'action' => 'index')); ?></li>
						</ul>
					</li>
	    		</ul>
				<ul class="nav navbar-nav navbar-right">
	    			<li><a href="/logout"><span class="glyphicon glyphicon-user"></span> Salir</a></li>
				</ul>
			</div>
		</nav>
	</header>
	
	<section class="container-fluid">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</section>
	
	<footer class="navbar navbar-inverse navbar-fixed-bottom">
		Sistema de Gestión de Socios Biblioteca Vigil
	</footer>

	<?php
	echo $this->Html->script(array('/bower_components/jquery/dist/jquery.min'
		, '/bower_components/bootstrap/dist/js/bootstrap.min.js'
		, '/bower_components/angular/angular.min.js'
		, '/bower_components/angular-resource/angular-resource.min.js'
		, '/bower_components/angular-ui-bootstrap-bower/ui-bootstrap-tpls.min'
		, '/bower_components/angular-i18n/angular-locale_es-ar.js'
		, 'main.min'
		// , '/bower_components/angular-route/angular-route.min.js'
		// , '/bower_components/angular-bootstrap/ui-bootstrap-tpls.min'
		// , '/bower_components/angular-ui-utils/keypress.min'
	));
	echo $this->fetch('script');
	?>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
