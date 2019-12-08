<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('index.php/login'));//arrumar essa rota
		}
        $this->load->model('produtos_model', 'modelprodutos');

		
    }

	public function index($pular=null,$post_por_pagina=null){
		$this->load->library('table');
        //$dados['produtos'] = $this->modelprodutos->listar_produtos();
		$this->load->library('pagination');

		$config['base_url'] = base_url("index.php/admin");//arrumar essa rota
		$config['total_rows'] = $this->modelprodutos->contar();
		$dados['itens'] = $this->modelprodutos->listar_itens();
		
		foreach($dados['itens'] as $item){
			$post_por_pagina = $item->qtd;
		}
		$config['per_page'] = $post_por_pagina;

		$this->pagination->initialize($config);

		$dados['links_paginacao'] = $this->pagination->create_links();
		$dados['produtos'] = $this->modelprodutos->listar_produtos($pular,$post_por_pagina);//$pular,$post_por_pagina
		
		$this->load->view('backend/template/header');
		$this->load->view('backend/index',$dados);
		$this->load->view('backend/template/footer');

    }
    public function excluir($id){
        $this->load->model('produtos_model', 'modelprodutos');

        if($this->modelprodutos->excluir($id)){
			redirect(base_url('index.php/admin/'));
			redirect(base_url('index.php/admin/'));
        }else{
            echo "Houve um erro no sistema!";
        }
    }
    public function inserir(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('txt-nome', 'Nome',
		'required|min_length[3]');
		$this->form_validation->set_rules('txt-descricao', 'Descrição',
		'required|min_length[20]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$nome=$this->input->post('txt-nome');
			$descricao=$this->input->post('txt-descricao');

			if($this->modelprodutos->adicionar($nome,$descricao)){
				redirect(base_url('index.php/admin/'));
			}else{
				echo "Houve um erro no sistema!";
			}
		} 
    }
    public function alterar($id){
		$this->load->library('table');
		$dados['produtos'] = $this->modelprodutos->listar_produto($id);
		$dados['titulo'] = 'Painel de controle';
		$dados['subtitulo'] = 'Publicacão';

		$this->load->view('backend/template/header');

		$this->load->view('backend/alterar-produto', $dados);
		$this->load->view('backend/template/footer');

    }
    public function salvar_alteracoes($idCrip){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-nome','Nome',
			'required|min_length[3]');
		$this->form_validation->set_rules('txt-descricao','Descrição',
			'required|min_length[20]');
		if ($this->form_validation->run() == FALSE){
			$this->alterar($idCrip);
		}else{
			$nome= $this->input->post('txt-nome');
			$descricao= $this->input->post('txt-descricao');
			$id= $this->input->post('txt-id');
			if($this->modelprodutos->alterar($nome,$img,$descricao,$id)){
				redirect(base_url('index.php/admin/'));
			}else{
				echo "Houve um erro no sistema!";
			}
		}
	}
	public function nova_foto(){
		//if(!$this->session->userdata('logado')){
			//redirect(base_url('admin/login'));
		//}
		//$this->load->model('usuarios_model', 'modelusuarios');

		$id= $this->input->post('id');
		$config['upload_path']= './assets/img/produtos/';
		$config['allowed_types']= 'jpg';
		$config['file_name']= $id.".jpg";
		$config['overwrite']= TRUE;
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload()){
			echo $this->upload->display_errors();
		}else{
			$config2['source_image']= './assets/img/produtos/'.$id.'.jpg';
			$config2['create_thumb']= FALSE;
			$config2['width']= 200;
			$config2['height']= 200;
			$this->load->library('image_lib', $config2);
			if($this->image_lib->resize()){

				if($this->modelprodutos->alterar_img($id)){
					redirect(base_url('index.php/admin/alterar/'.$id));//arrumar essa rota
				}else{
					echo "Houve um erro no sistema!";
				}
				
			}else{
				echo $this->image_lib->display_errors();
			} 
		}

	}
	
	public function sair(){
        $dadosSessao['userlogado'] = NULL;
        $dadosSessao['logado'] = FALSE;
        $this->session->set_userdata($dadosSessao);
        redirect(base_url('index.php/login'));//arrumar essa rota
	}
	public function qtditens($id){
		$qtd=$this->input->post('txt-qtd-itens');

		if($this->modelprodutos->qtd_itens($id,$qtd)){
			redirect(base_url('index.php/admin/'));
		}else{
			echo "Houve um erro no sistema!";
		}
	}
	
}