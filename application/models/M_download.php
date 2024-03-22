<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_download extends CI_Model
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_download');
        $this->db->order_by('id_file', 'desc');
        return $this->db->get('')->result();
    }

    public function detail($id_file)
    {
        $this->db->select('*');
        $this->db->from('tbl_download');
        $this->db->where('id_file', $id_file);
        $this->db->order_by('id_file', 'desc');
        return $this->db->get()->row();
    }

    public function add($data)
    {
        $this->db->insert('tbl_download', $data);
    }

    public function edit($data)
    {

        $this->db->where('id_file', $data['id_file']);

        $this->db->update('tbl_download', $data);
    }

    public function delete($data)
    {

        $this->db->where('id_file', $data['id_file']);

        $this->db->delete('tbl_download', $data);
    }
}
