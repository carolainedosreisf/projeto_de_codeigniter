<body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Cadastrar-se no Sistema</h3>
                        </div>
                        <div class="panel-body">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">', '</div>');
                                echo form_open('usuarios/cadastrar');
                            ?>
                            
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nome" name="txt-nome" type="etxt" value="<?php echo set_value('txt-nome');?>" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Telefone" name="txt-telefone" type="text" value="<?php echo set_value('txt-telefone');?>">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" name="txt-email" type="email" value="<?php echo set_value('txt-email');?>">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Senha" name="txt-senha" type="password" value="<?php echo set_value('txt-senha');?>" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Confirmação da senha" name="txt-senha-confirme" type="password" value="<?php echo set_value('txt-senha-confirme');?>" value="">
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-lg btn-success btn-block">Cadastrar</button>
                                </fieldset>
                                <?php echo form_close();?>
                            
                        </div> 
                    </div>
                </div>
            </div>
        </div>