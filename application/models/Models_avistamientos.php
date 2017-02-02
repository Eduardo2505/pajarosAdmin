<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Models_avistamientos extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insertar($data) {

        $this->db->trans_begin();
        $this->db->insert('avistamientos', $data);

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
        $this->db->update('avistamientos', $data);

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
        $this->db->delete('avistamientos');

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
        $query = $this->db->get('avistamientos');
        return $query->result();
    }
    
    
    
    function get() {

        $SQl = "SELECT id,titulo,pajaro,veces FROM avistamientos ";

       

        return $this->db->query($SQl)->result();
    }
    

}