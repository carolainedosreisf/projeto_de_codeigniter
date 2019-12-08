<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    public function __construct(){
        parent::__construct();
        //$this->load->model('produtos_model', 'modelprodutos');

		
    }

	public function pag_login(){
        $this->load->view('backend/template/header');
        $this->load->view('backend/login');
        $this->load->view('backend/template/footer');

    }
    public function pag_cadastro(){
        $this->load->view('backend/template/header');
        $this->load->view('backend/cadastro');
        $this->load->view('backend/template/footer');

    }
	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-email', 'Email',
            'required|min_length[3]','required|valid_email');
        $this->form_validation->set_rules('txt-senha', 'Senha',
			'required|min_length[3]');
		if($this->form_validation->run() == FALSE){
			$this->pag_login();
			//echo 'erro';
		}else{
			$email= $this->input->post('txt-email');
            $senha =$this->input->post('txt-senha');
            $this->db->where('email', $email);
            $this->db->where('senha', md5($senha));
            $userlogado = $this->db->get('usuarios')->result();
            if(count($userlogado) ==1){
                $dadosSessao['userlogado'] = $userlogado[0];
                $dadosSessao['logado'] = TRUE;
                $this->session->set_userdata($dadosSessao);
                redirect(base_url('index.php/admin'));//arrumar essa rota

            }else{
                $dadosSessao['userlogado'] = NULL;
                $dadosSessao['logado'] = FALSE;
				$this->session->set_userdata($dadosSessao);
				//echo 'erro';
                redirect(base_url('index.php/login'));//arrumar essa rota

            }
		}
    }
    public function cadastrar(){
        
         $this->load->model('usuarios_model','modelusuarios');
 
         $this->load->library('form_validation');
         $this->form_validation->set_rules('txt-nome', 'Nome do Usuário',
         'required|min_length[3]');
         $this->form_validation->set_rules('txt-telefone', 'Telefone',
         'required');
         $this->form_validation->set_rules('txt-email', 'email',
         
         'required|valid_email|is_unique[usuarios.email]');
         $this->form_validation->set_rules('txt-senha', 'Senha',
         'required|min_length[3]');
         $this->form_validation->set_rules('txt-senha-confirme', 'Confirmar senha',
             'required|matches[txt-senha]');
         if($this->form_validation->run() == FALSE){
             $this->pag_cadastro();
         }else{
             $nome=$this->input->post('txt-nome');
             $telefone=$this->input->post('txt-telefone');
             $email=$this->input->post('txt-email');
             $senha=$this->input->post('txt-senha');
             if($this->modelusuarios->cadastrar($nome,$telefone,$email,$senha)){
                 redirect(base_url('index.php/login'));//arrumar essa rota
             }else{
                 echo "Houve um erro no sistema!";
             }
         }
     }
}