<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kategori
 *
 * @author windows8.1
 */
class Kategori extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // if (!$this->session->has_userdata('nama')) {
        //     redirect('Sign_in');
        // }
    }

    function index() {
        $data['data'] = $this->crud->select_other('kategori','order by id_kategori desc')->result();
        $this->load->view("kategori/kategori_data", $data);
    }

    public function simpan_kategori() {
        $kat = $this->input->post('kategori');
        $seo = strtolower(str_replace(" ", "-", $kat));

        $data = array(
            'nama_kategori' => $kat,
            'kategori_seo' => $seo,
        );
        $this->crud->insert('kategori', $data);
        echo "Data Berhasil Disimpan!";
    }

    function hapus_kategori() {
        $id = $this->input->post('id');
        $this->crud->delete('kategori', 'id_kategori', $id);
        echo "Data Berhasil Dihapus...";
    }

    function select_kategori_id($id) {
        $data = $this->crud->select_id('kategori', 'id_kategori', $id)->row();
        echo json_encode($data);
    }
    function update_kategori() {
        $id = $this->input->post("id");
        $kat = $this->input->post('kategori');
        $seo = strtolower(str_replace(" ", "-", $kat));

        $data = array(
            'nama_kategori' => $kat,
            'kategori_seo' => $seo,
        );
        $this->crud->update('kategori', $data, 'id_kategori', $id);
        echo "Data Berhasil Disimpan!";
    }

}
