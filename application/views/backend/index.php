
<body>
<br>
<div class="container">
    <div class="row">
    <h2>Bem vindo ao sistema <?php echo $this->session->userdata('userlogado')->nome; ?>! <span><a href="sair" class="btn btn-default" title="Sair do sistema"> <i class="fa fa-power-off" aria-hidden="true"></i></a></span></h2>
    
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo 'Adicionar novo produto ' ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">', '</div>');
                                echo form_open('/admin/inserir');
                            ?>
                        
                            <div class="form-group">
                                <label id="txt-nome">Nome </label>
                                <input type="text" id="txt-nome" name="txt-nome" class="form-control" placeholder="Digite o nome do produto..." value="<?php echo set_value('txt-nome');?>">
                            </div>
                           
                            <div class="form-group">
                                <label id="txt-descricao">Descrição</label>
                                <textarea id="txt-conteudo" name="txt-descricao" class="form-control"><?php echo set_value('txt-descricao');?></textarea>
                            </div>
                            
                        
                       

                            <button type="submit" class="btn btn-default">Cadastrar</button>

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
    </div>
<div>
<!--  Aqui começa o exemplo -->
<div class="container">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4> Produtos<h4>
                        </div>
                        <div class="col-md-6">
                            <?php  echo form_open('/admin/qtditens/0');?>
                            <div class="qtd_itens">
                                <span><strong>Qtd. de itens por página: </strong> </span>
                                
                                <select name="txt-qtd-itens" class="txt-qtd-itens" >
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                                <button class="btn btn-default">Listar</button>
                            </div>
                            <?php echo form_close();?>

                         </div>
                    </div>
                    <?php
                        foreach($itens as $item){
                            $qtd = $item->qtd;
                            echo "<script>document.querySelector('.txt-qtd-itens').value = $qtd ;</script>";
                        }
                        
            

                    ?>
                    
                       
                </div>
                <style type="text/css">
                    .mostra_img{
                        width: 70px;
                    }
                    img{
                        width: 50px !important;  
                    }
                    
                </style>
               
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                $this->table->set_heading("Imagem","Nome do produto","descricão","Alterar", "Excluir");
                                foreach($produtos as $produto){
                                    if($produto->img == 1){
                                        $imagemprod = img("assets/img/produtos/".md5($produto->id).".jpg");
                                        
                                    }else{
                                        $imagemprod =  img("assets/img/semFoto.png");
                                    }
                                    
                                    $nomeprod = $produto->nome;
                                    $descricao =   '<button type="button" class="btn btn-default" data-toggle="modal" data-target=".descricao-modal-'.$produto->id.'"> Abrir</button>';
                                    $alterar= anchor(base_url('index.php/admin/alterar/'.md5($produto->id)),'<i class="fa fa-refresh fa-fw"></i> Alterar');
                                    $excluir= '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$produto->id.'"><i class="fa fa-remove fa-fw"></i> Excluir</button>';

                                    echo $modal= 
                                        ' <div class="modal fade excluir-modal-'.$produto->id.'" tabindex="-1"         role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel2">Exclusão de produto</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Deseja Excluir o produto de nome '.$produto->nome.'?</h4>
                                                        <p>Após Excluir o produto <b>'.$produto->nome.'</b> não ficara mais disponível no Sistema.</p>
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                        <a type="button" class="btn btn-primary" href="'.base_url("index.php/admin/excluir/".md5($produto->id)).'">Excluir</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>';
                                    echo $modal2= 
                                    ' <div class="modal fade descricao-modal-'.$produto->id.'" tabindex="-1"         role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel2">Descrição do produto</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>'. $produto->nome.'</h4>
                                                    <p> '.$produto->descricao.'</p>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                
                                                </div>

                                            </div>
                                        </div>
                                    </div>';
                                    $this->table->add_row($imagemprod,$nomeprod,$descricao,$alterar,$excluir);
                                }
                                $this->table->set_template(array(
                                    'table_open' => '<table class="table table-striped">'
                                ));
                                echo $this->table->generate();
                                echo "<div class='paginacao'>".$links_paginacao."</div>";

                            ?>
                        </div>
                        
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body --> 
            </div>
        </div>
    </div>
</div>


   