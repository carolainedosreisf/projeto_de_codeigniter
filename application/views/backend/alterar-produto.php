
<body>
    <br>
    <div id="page-wrapper">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo 'Alterar produto ' ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            echo validation_errors('<div class="alert alert-danger">','</div>');
                            foreach($produtos as $produto){
                            echo form_open('admin/salvar_alteracoes/'.md5($produto->id));
                            
                            ?>
                            
                            <div class="form-group">
                                <label id="txt-nome">Nome </label>
                                <input type="text" id="txt-nome" name="txt-nome" class="form-control" placeholder="Digite o nome do produto..." value="<?php echo $produto->nome;?>">
                            </div>
                            
                            <div class="form-group">
                                <label id="txt-descricao">Descrição</label>
                                <textarea id="txt-conteudo" name="txt-descricao" class="form-control"><?php echo $produto->descricao;?></textarea>
                            </div>
                            <input type="hidden" name="txt-id" value="<?php echo $produto->id;  ?>">
                            <button type="submit" class="btn btn-default">Salvar Alterações</button>
                            <?php
                                echo form_close();
                          
                            ?>
                        </div>
                        
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo 'Imagem de destaque do produto'?>
                </div>
                <style type="text/css">
                    img{width: 200px;};

                </style>
                <div class="panel-body">
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-lg-12 img_pub" >
                    <style>
                        .img_pub{
                                                              
                        }
                    </style>
                    <?php 
                    if($produto->img == 1){
                        echo img("assets/img/produtos/".md5($produto->id).".jpg");
                    }else{
                        echo img("assets/img/semFoto.png");
                    }

                    ?>

                    </div>   
                </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            
                            $divopen= '<div class="form-group">';
                            $divclose= '</div>';
                            echo form_open_multipart('admin/nova_foto');
                            echo form_hidden('id', md5($produto->id));
                            echo $divopen;
                            $imagem= array('name' => 'userfile', 'id' => 'userfile', 'class' => 'form-control');
                            echo form_upload($imagem);
                            echo $divclose;
                            echo $divopen;
                            $botao= array('name' => 'btn_adicionar', 'id' => 'btn_adicionar', 'class' => 'btn btn-default',
                                'value' => 'Adicionar nova Imagem');
                            echo form_submit($botao);
                            echo $divclose;
                            echo form_close();
                            
                            
                            }
                            ?>
                        </div>
                        
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>


