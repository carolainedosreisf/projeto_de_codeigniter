<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('produtos_model', 'modelprodutos');

		
    } 

	public function index($pular=null,$post_por_pagina=null){
        $dados['produtos'] = $this->modelprodutos->listar_produtos();
        $this->load->library('pagination');

		$config['base_url'] = base_url("index");//arrumar essa rota
		$config['total_rows'] = $this->modelprodutos->contar();
		$dados['itens'] = $this->modelprodutos->listar_itens_front();
		
		foreach($dados['itens'] as $item){
			$post_por_pagina = $item->qtd;
		}
		$config['per_page'] = $post_por_pagina;

		$this->pagination->initialize($config);

		$dados['links_paginacao'] = $this->pagination->create_links();
		$dados['produtos'] = $this->modelprodutos->listar_produtos($pular,$post_por_pagina);//$pular,$post_por_pagina
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/index',$dados);
		$this->load->view('frontend/template/footer');
    }
    
    public function qtditens($id){
		$qtd=$this->input->post('txt-qtd-itens');

		if($this->modelprodutos->qtd_itens_front($id,$qtd)){
			redirect(base_url('/'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}
}