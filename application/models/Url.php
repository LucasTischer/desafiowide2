<?php

class Url extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    //busca do urls banco de dados
    public function get_urls(){

        $query = $this->db->get('urls');
        $data = $query->result();
        
        return $data;

    }
    //atualiza urls
    public function update_url($id, $data){

        $this->db->where('id', $id);
        $this->db->update("urls", $data);
    }

}