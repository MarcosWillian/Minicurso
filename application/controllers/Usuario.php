<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct() {
        parent::__construct();      
        $this->load->model("Usuario_model", "usuario");             
    }
	
	public function index(){

		$dados['usuarios'] = $this->usuario->buscar();
		
		$this->load->view('head');
		$this->load->view('usuario/listar', $dados);
	}

	public function cadastrar(){

		$this->load->view('head');
		$this->load->view('usuario/cadastrar');
	}

	public function editar(){
		$id = $this->uri->segment(3);

		if(empty($id)){
			redirect("usuario");
		}

		$dados['usuario'] = $this->usuario->buscar_id($id);

		$this->load->view('head');
		$this->load->view('usuario/editar', $dados);
	}


	public function funcao_cadastrar(){

		$dados = array(
			"nome"  => $this->input->post('nome'),
			"idade" => $this->input->post('idade'),
			"email" => $this->input->post('email')			
		);
		
		if( $this->usuario->salvar($dados) ){
			$this->session->set_flashdata("mensagem", "Usuário cadastrado com sucesso");
			$this->session->set_flashdata("tipo", "sucesso");
		}
		else {
			$this->session->set_flashdata("mensagem", "Ocorreu um erro ao cadastrar o usuário");
			$this->session->set_flashdata("tipo", "erro");			
		}

		redirect("Usuario");
	}


	public function funcao_editar(){

		$id = (int) $this->input->post('id');

		if(empty($id)){
			redirect("usuario");
		}

		$dados = array(
			"nome"  => $this->input->post('nome'),
			"idade" => $this->input->post('idade'),
			"email" => $this->input->post('email')			
		);
		
		if( $this->usuario->editar($dados, $id) ){
			$this->session->set_flashdata("mensagem", "Usuário editado com sucesso");
			$this->session->set_flashdata("tipo", "sucesso");
		}
		else {
			$this->session->set_flashdata("mensagem", "Ocorreu um erro ao editar o usuário");
			$this->session->set_flashdata("tipo", "erro");			
		}

		redirect("Usuario");
	}


	public function funcao_excluir(){

		$id = (int) $this->uri->segment(3);

		if(empty($id)){
			redirect("usuario");
		}
		
		if( $this->usuario->deletar($id) ){
			$this->session->set_flashdata("mensagem", "Usuário deletado com sucesso");
			$this->session->set_flashdata("tipo", "sucesso");
		}
		else {
			$this->session->set_flashdata("mensagem", "Ocorreu um erro ao deletar o usuário");
			$this->session->set_flashdata("tipo", "erro");			
		}

		redirect("Usuario");
	}

	

}
