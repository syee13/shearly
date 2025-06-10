<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {
    public function get_all_pasien() {
        return $this->db->get('pasien')->result_array();
    }

    public function get_status_pasien() {
        return $this->db->get('status_pasien')->result();
    }

    public function get_status_by_id($id) {
        return $this->db->get_where('pasien', ['idpasien' => $id])->row_array();
    }

    public function insert_pasien($data) {
        return $this->db->insert('pasien', $data);
    }

    public function delete_pasien($idpasien) {
        return $this->db->delete('pasien', ['idpasien' => $idpasien]);
    }

    public function get_pasien_by_id($idpasien) {
        return $this->db->get_where('pasien', ['idpasien' => $idpasien])->row_array();
    }

    public function update_pasien($id, $data) {
        $this->db->where('idpasien', $id);
        return $this->db->update('pasien', $data);
    }
    public function get_all_pasien_by_user($id_user) {
    return $this->db->get_where('pasien', ['id_user' => $id_user])->result_array();
}
public function get_laporan_pasien($dari, $sampai)
{
    $this->db->where('tgl_kunjungan >=', $dari);
    $this->db->where('tgl_kunjungan <=', $sampai);
    return $this->db->get('pasien')->result();
}


}
