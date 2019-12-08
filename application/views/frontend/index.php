

    <body>
    <?php  echo form_open('/index/qtditens/1');?>
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
    <br>
        <div id="about" class="section wb">
            <div class="container">
                <div class="row">
                <?php foreach($produtos as $produto) {?>
                    <div class="col-md-4 col-sm-6">
                        <a data-toggle="modal" data-target=".descricao-modal-<?php echo $produto->id ;?>">
                            <div class="about-item about-item2">
                                <div class="about-ico">
                                    <?php if($produto->img == 1){?>
                                        <img src="<?php echo base_url('assets/img/produtos/'. md5($produto->id).'.jpg');?>" class="mostra_img">
                                    <?php }else{ ?>
                                        <img src="<?php echo base_url('assets/img/semFoto.png');?>" class="mostra_img">
                                    <?php }?>
                                </div>
                                <div class="blog-text">
                                    <h3><?php echo  $produto->nome;?></h3>
                                    <span class="posted_on">Mais detalhes >></span>
                                </div> 
                            </div>
                        </a>
                    </div>
                    <div class="modal fade descricao-modal-<?php echo $produto->id ;?>" tabindex="-1"  role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2">Descrição do produto</h4>
                                </div>
                                <div class="modal-body">
                                    <h4><?php echo  $produto->nome;?></h4>
                                    <p> <?php echo $produto->descricao ;?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>  
                <?php 
                    foreach($itens as $item){
                        $qtd = $item->qtd;
                        echo "<script>document.querySelector('.txt-qtd-itens').value = $qtd ;</script>";
                    }
                ?>
                </div>
            </div><!-- end container -->
            <div class="container">
                <div class="row">
                    <?php   echo "<div class='paginacao'>".$links_paginacao."</div>"; ?>
                </div>
            </div>
        </div><!-- end section -->
   