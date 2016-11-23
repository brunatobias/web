<!DOCTYPE html >
  <html lang ="pt-br">
  <head>
  <meta charset="utf-8">
  <title>Pokemon GO</title>
			
  <?php
  echo meta(array('name'=> 'viewport', 'content' => 'width=device-width, initial-scale=1.0')) .
  link_tag('assets/css/bootstrap.min.css') .
  link_tag('assets/css/bootstrap-responsive.min.css') .
   link_tag('assets/css/estilos.css');
   ?>
   <script src ="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
   <script src ="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script >
  </head>
  <body>
<center>
<div class="topo">
<div class="container">
	<div class ="masthead">
			<center>			<img src="http://localhost/pokemon/assets/img/01.png" ></center>
			<h3>Pokemon GO</h3>
			<nav class="navbar navbar-default">

		  <ul class="nav navbar-nav">
		
			  <li class="active"><a href="http://localhost/pokemon/index.php/Login">LOGIN</a></li>
				
		 </ul>
	 </nav>

  </div>
<div class="input-group">


<fieldset>

<!-- Form Name -->
<legend>Faça login!</legend>
<?php
 echo validation_errors();
 echo form_open(base_url('index.php/Login/login'),array('id'=>'form_login')).form_input(array('id'=>'email','name'=>'email','Placeholder'=>'E-mail','value'=>set_value('email'))).form_password( array('id'=>'senha','name'=>'senha','Placeholder'=>'Senha')).form_submit("btnLogin","Efetuar Login ").form_close();
 ?>
 </ div >
</fieldset>
</div>
  </div>
</center>
</body>
</html>
