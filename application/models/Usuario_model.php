<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {


	public function buscar(){
        $this->db->order_by('id', 'asc');
        $dados = $this->db->get('usuario');
        return $dados->result();
    }

    public function buscar_id($id){
        $this->db->where('id', $id);
        $dados = $this->db->get('usuario', 1);
        $data  = $dados->result();
        return $data[0];
    }

    public function salvar($dados){
        return $this->db->insert('usuario', $dados);        
    }

    public function editar($dados, $id){
        $this->db->where('id', $id);
        return $this->db->update('usuario', $dados);        
    }

    public function deletar($id){
        $this->db->where('id', $id);
        return $this->db->delete('usuario');
    }


}
