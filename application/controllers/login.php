<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        //$this->load->model('produtos_model', 'modelprodutos');

		
    }

	public function pag_login(){
        $this->load->view('backend/template/header');
        $this->load->view('backend/login');
        $this->load->view('backend/template/footer');

    }
	public function index(){
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
}