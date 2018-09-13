<!DOCTYPE html>  
 <html>  
 <head>  
	<title>Login | <?php echo $title; ?></title>  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('views/assets/style.css'); ?>">
 </head>  
 <body>  
	<div class="container">
		<div class="row">
			<form method="post" action="<?php echo base_url(); ?>login_validation" id="formLogin">  
				<div class="form-group">
					<input type="text" name="username" class="form-control" />  
					<span class="text-danger"><?php echo form_error('username'); ?></span>                 
				</div>  
				<div class="form-group">
					<input type="password" name="password" class="form-control" />  
					<span class="text-danger"><?php echo form_error('password'); ?></span>  
				</div>  
				<div class="form-group">  
					<input type="submit" name="insert" value="Login" class="btn btn-info" />  
					<?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>  
				</div>  
			</form>  
		</div>
	</div>  
 </body>  
 </html>  