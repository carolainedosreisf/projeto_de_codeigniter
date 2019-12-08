
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Entrar no sistema</h3>
                        </div>
                        <div class="panel-body">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">', '</div>');
                                echo form_open('usuarios/login/');
                            ?>
                            
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" name="txt-email" type="email" value="<?php echo set_value('txt-email');?>" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Senha" name="txt-senha" type="password" value="<?php echo set_value('txt-senha');?>" value="">
                                    </div>
                                    <a href="http://localhost/php/projeto_codeigniter/index.php/cadastro" class="cadastrar_se">Não tenho cadastro</a>
                                    <!-- http://localhost/php/projeto_codeigniter/index.php/cadastro -->
                                    <button class="btn btn-lg btn-success btn-block entrar">Entrar</button>
                                </fieldset>
                                <?php echo form_close();?>
                            
                        </div> 
                    </div>
                </div>
            </div>
        </div>
      