<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produtos_model extends CI_Model {

    public $id;
    public $caminho_img;
	public $nome;
	public $descricao;

    public function __construct(){
        parent::__construct();
    }
    public function listar_produtos($pular=null,$post_por_pagina=null){
		//$this->db->select('id,caminho_img,nome,descricao,img');
		//$this->db->from('produtos');
		$this->db->order_by('id', 'DESC');
		
		if($pular && $post_por_pagina){

			$this->db->limit($post_por_pagina,$pular);

		}else{
			
			$this->db->limit($post_por_pagina);
		}

		return $this->db->get('produtos')->result();
	}   
	
	public function listar_produto($id){
		$this->db->from('produtos');
		$this->db->where('md5(id)',$id);
		return $this->db->get()->result();
	}
	public function listar_itens(){
		$this->db->from('itens');
		$this->db->where('id',0);
		return $this->db->get()->result();
	}
	public function listar_itens_front(){
		$this->db->from('itens');
		$this->db->where('id',1);
		return $this->db->get()->result();
	}
	public function excluir($id){
		$this->db->where('md5(id)',$id);
		return $this->db->delete('produtos');
	}
	public function adicionar($nome,$descricao){
		$dados['nome'] = $nome;
		$dados['descricao'] = $descricao;
	
		return $this->db->insert('produtos', $dados);
	}
	public function alterar($nome,$img,$descricao,$id){
		$dados['nome'] = $nome;
		$dados['descricao'] = $descricao;
		$this->db->where('id',$id);
		return $this->db->update('produtos',$dados);
	}
	public function alterar_img($id){
		$dados['img']= 1;
		$this->db->where('md5(id)',$id);
		return $this->db->update('produtos',$dados);
	}
	public function contar(){
		return $this->db->count_all('produtos');
	}
	public function qtd_itens($id,$qtd){
		$dados['id'] = $id;
		$dados['qtd'] = $qtd;
		$this->db->where('id',$id);
		return $this->db->update('itens',$dados);
	}
	public function qtd_itens_front($id,$qtd){
		$dados['id'] = $id;
		$dados['qtd'] = $qtd;
		$this->db->where('id',$id);
		return $this->db->update('itens',$dados);
	}
	
	
}