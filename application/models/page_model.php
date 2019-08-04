<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {

	public function getallmakanan()
    {
        return $this->db->get('data_makanan');
    }
    public function getallkriteria()
    {
        return $this->db->get('kriteria');
    }
    public function getallmatrik()
    {
        return $this->db->get('matrik_transformasi');
    }
    public function getallrangking()
    {
        $this->db->order_by('nilai_alternatif', 'ASC');
        return $this->db->get('matrik_transformasi');
    }
    
    public function getByIdmakanan($id)
    {
        return $this->db->get_where('data_makanan', ['id' => $id]);
    }
    public function getByIdkriteria($id)
    {
        return $this->db->get_where('kriteria', ['id' => $id]);
    }

    public function savemakanan($data,$table)
    {
         $this->db->insert($table,$data);
    }
    public function savetransformasi($data,$table)
    {
         $this->db->insert($table,$data);
    }
    public function savekriteria($data,$table)
    {
         $this->db->insert($table,$data);
    }

    public function updatemakanan($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('data_makanan', $data);
    }
    public function updatetransformasi($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('matrik_transformasi', $data);
    }
    public function updatekriteria()
    {
        $this->db->update();
    }

    public function deletemakanan($id)
    {
        $tables = array('data_makanan', 'matrik_transformasi');
        $this->db->where('id', $id);
        return $this->db->delete($tables);
    }
    public function deletekriteria($id)
    {
        return $this->db->delete('data_makanan', array('id' => $id));
    }

}
