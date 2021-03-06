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

$cakeDescription = __d('cake_dev', 'Estetica Venus');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	 	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
			'bootstrap',
			'responsive',
			'style',
			'touchTouch',
			'kwicks-slider'
			));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
</head>
<body>
	<div id="container">
		<div id="content">
			<header>
      			<div class="container clearfix">
    				<div class="row">
          				<div class="span12">
       					 	<div class="navbar navbar_">
              					<div class="container">
            							<h1 class="brand brand_">
            								<a href="index.html">
            									<?php  echo $this->Html->image('Logo.jpg')?>
            								</a>
            							</h1>
            							<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu 
            								<span class="icon-bar">
            									
            								</span> 
            							</a>
            
            <div class="nav-collapse nav-collapse_  collapse">
                <ul class="nav sf-menu">
		                <li class="active">
		                	<a href="http://estetica-venus.herokuapp.com/"> Inicio</a>
		                </li>
		                <?php if(!AuthComponent::user('id')){

		                	echo '<li>
		                			<a href="/users/login/">Entrar</a>
				                </li>
				                <li>
				                	<a href="/users/register/">Registrate</a>
				                </li>
				                ';

		                } else {
		                	if (AuthComponent::user('role_id') == 1) {
		                		echo '<li>
				                	<a href="/users/view/">Usuarios</a>
				                </li>';
				                echo '<li>
				                	<a href="/appointments/view/"> Ver Citas</a>
				                </li>';
		                	} else {
		                		echo '<li>
				                	<a href="/appointments/add/">Citas</a>
				                </li>';
		                	}
		                	
		                	echo '<li>
				                	<a href="#">'.AuthComponent::user('first_name').'</a>
				                </li>'; 

				            echo '<li>
				                	<a href="/users/logout/">Salir</a>
				                </li>'; 

		                	
		                }

		                ?>
		                
          		</ul>
             </div>
          					</div>
  						</div>
					</div>
  				</div>
  			</div>
		 </header>


			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<footer>
      <div class="container clearfix">
    <ul class="list-social pull-right">
          <li><a class="icon-1" href="https://www.facebook.com/phhhhm"></a></li>
          <li><a class="icon-2" href="http://peasheemee.blogspot.mx/"></a></li>
          <li><a class="icon-3" href="https://twitter.com/peasheeme"></a></li>
          <li><a class="icon-4" href="https://plus.google.com/u/0/"></a></li>
        </ul>

        <div class="block-slogan"> Derechos reservados Estetica Venus</div>
    
  </div>
    </footer>
	</div>
	
	<?php echo $this->Html->script(array(
		'superfish',
		'jquery.flexslider-min',
		'jquery.kwicks-1.5.1',
		'jquery.easing.1.3',
		'touchTouch.jquery',
		'bootstrap'))?>


	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
