<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_model extends CI_Model {

    public $id;
    public $caminho_img;
	public $nome;
	public $descricao;

    public function __construct(){
        parent::__construct();
    }
    public function cadastrar($nome,$telefone,$email,$senha){
        $dados['nome'] = $nome;
        $dados['telefone'] = $telefone;
		$dados['email'] = $email;
		$dados['senha'] = md5($senha);
		return $this->db->insert('usuarios', $dados);
	}
}