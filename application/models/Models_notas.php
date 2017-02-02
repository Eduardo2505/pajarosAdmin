<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Models_notas extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insertar($data) {

        $this->db->trans_begin();
        $this->db->insert('notas', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }

    function update($id, $data) {

        $this->db->trans_begin();
        $this->db->where('id', $id);
        $this->db->update('notas', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }



    function eliminar($id) {

        $this->db->trans_begin();
        $this->db->where('id', $id);
        $this->db->delete('notas');

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        } else {
            $this->db->trans_commit();
            return 1;
        }
    }




    
    
    
    function Buscar($id) {

        $this->db->where('id', $id);
        $query = $this->db->get('notas');
        return $query->result();
    }
    
    
    
    function get() {



        return $this->db->get('notas')->result();
    }
    

}