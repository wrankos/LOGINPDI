<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>
	
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="vendors/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="vendors/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="vendors/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="vendors/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="vendors/ico/apple-touch-icon-57-precomposed.png">
        <style>
        	body{
        		background-image: url("<?php echo base_url() ?>vendors/img/backgrounds/1.jpg");
        	}
        </style>
</head>
<body>
	<div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>PDI</strong> Nombre del sitio</h1>
                            <div class="description">
                            	<p>
	                            	Debe ingresar al sitio con su usuario y contraseña de <strong>ACTIVE DIRECTORY</strong>
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3> Inicio de Sesión </h3>
                        			<p><?php echo date("d-m-Y") ?></p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <div class="login-form">
				                    <?php echo form_open('/Login/logear'); ?>
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="usuario" placeholder="Usuario..." class=" form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="contraseña" placeholder="Contraseña..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn btn-primary btn-lg">Ingresar !</button>
				                    <?php form_close(); ?>
			                    </div>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>¿Olvido su Contraseña?</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-search"></i> Recuperar Contraseña
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="vendors/js/jquery-1.11.1.min.js"></script>
        <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>