<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
    public function __construct(){
        parent::__construct();
        
        $this->load->model('usuarios_model','modelusuarios');

		
    }
    
    public function index(){
        $this->load->view('backend/template/header');
        $this->load->view('backend/cadastro');
        $this->load->view('backend/template/footer');
    }

    public function cadastrar(){
        
       // $this->load->model('usuarios_model','modelusuarios');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-nome', 'Nome do Usuário',
        'required|min_length[3]');
        $this->form_validation->set_rules('txt-telefone', 'Telefone',
        'required');
        $this->form_validation->set_rules('txt-email', 'email',
        
        'required|valid_email|is_unique_email[usuarios.email]');
        $this->form_validation->set_rules('txt-senha', 'Senha',
        'required|min_length[3]');
        $this->form_validation->set_rules('txt-senha-confirme', 'Confirmar senha',
            'required|matches[txt-senha]');
        if($this->form_validation->run() == FALSE){
            $this->index();
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