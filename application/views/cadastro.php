<!DOCTYPE html>  
<html>  
    <head>  
        <title>Cadastro!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>  
    <body>  
        <div class="container">
            <div class="row">
                <form method="post" action="<?php echo base_url('admin/cadastro/registra'); ?>" id="formLogin">  
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" name="login" id="login" class="form-control" placeholder="Login"/>
                            <span class="text-danger"><?php echo form_error('name'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="••••••"/>
                            <span class="text-danger"><?php echo form_error('senha'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome"/>
                            <span class="text-danger"><?php echo form_error('nome'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="Sobrenome"/>
                            <span class="text-danger"><?php echo form_error('sobrenome'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" name="email" id="email" class="form-control" placeholder="E-mail"/>
                            <span class="text-danger"><?php echo form_error('email'); ?></span>                 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="(16) 9 9284-1186"/>
                            <span class="text-danger"><?php echo form_error('telefone'); ?></span>                 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" name="cep" id="cep" class="form-control" placeholder="14020-000"/>
                            <span class="text-danger"><?php echo form_error('cep'); ?></span>            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" name="rua" id="rua" class="form-control" placeholder="Rua Paulista Ribeirão"/>
                            <span class="text-danger"><?php echo form_error('rua'); ?></span>            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" name="numero" id="numero" class="form-control" placeholder="9999"/>
                            <span class="text-danger"><?php echo form_error('numero'); ?></span>            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Jardim Paulista"/>
                            <span class="text-danger"><?php echo form_error('bairro'); ?></span>            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Ribeirão Preto"/>
                            <span class="text-danger"><?php echo form_error('cidade'); ?></span>            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" name="estado" id="estado" class="form-control" placeholder="SP"/>
                            <span class="text-danger"><?php echo form_error('estado'); ?></span>            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info">Cadastrar</button>  
                            <?php echo '<label class="text-danger">' . $this->session->flashdata("error") . '</label>'; ?>  
                        </div>
                    </div>  
                </form>  
            </div>
        </div>  
    </body>  
</html>  