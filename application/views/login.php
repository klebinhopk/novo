<!DOCTYPE html>  
 <html>  
 <head>  
	<title>Login</title>  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 </head>  
 <body>  
	<div class="container">
		<div class="row">
			<form method="post" action="<?php echo base_url('admin/login/autenticar'); ?>" id="formLogin">  
				<div class="form-group">
					<input type="text" name="login" class="form-control" placeholder="Digite seu login"/>
					<span class="text-danger"><?php echo form_error('login'); ?></span>
				</div>
				<div class="form-group">
					<input type="password" name="senha" class="form-control" placeholder="••••••"/>
					<span class="text-danger"><?php echo form_error('senha'); ?></span>
				</div>
				<div class="form-group">  
					<button type="submit" class="btn btn-info" >enviar </button>  
					<?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>  
				</div>  
			</form>  
		</div>
	</div>  
 </body>  
 </html>  