<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Galeri
 *
 * @author windows8.1
 */
class Gambar extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        // if (!$this->session->has_userdata('nama')) {
        //     redirect('Sign_in');
        // }
    }

    public function index() {
        $data['data'] = $this->crud->select_other('gambar', 'order by id_gambar desc')->result();
        $this->load->view("gambar/gambar_data", $data);
    }

    public function simpan_gambar() {
        $nama_gambar = $this->input->post('nama_gambar');
        $seo = strtolower(str_replace(" ", "-", $nama_gambar));
        $config['upload_path'] = './assets/gambar/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['file_name'] = $seo;
        $config['overwrite'] = true;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data();
//             echo $foto['file_name'];
            $data = array(
                'nama_gambar' => $nama_gambar,
                'gambar_seo' => $seo,
                'gambar' => $foto['file_name'],
            );
        } else {
            $data = array(
                'nama_gambar' => $nama_gambar,
                'gambar_seo' => $seo,
            );
//            echo $this->upload->display_errors();
        }
        $this->crud->insert('gambar', $data);
    }

    function hapus_gambar() {
        $id = $this->input->post('id');
        $file = $this->input->post('file');
        // unlink(("./assets/gambar/$file"));

        $this->crud->delete('gambar', 'id_gambar', $id);
        echo "Data Berhasil Dihapus...";
    }

    function select_gambar_id($id) {
        $data = $this->crud->select_id('gambar', 'id_gambar', $id)->row();
        echo json_encode($data);
    }

    function update_gambar() {
        $id = $this->input->post("id");
        $file_name = $this->input->post("gambar");
        $nama_gambar = $this->input->post('nama_gambar');
        $seo = strtolower(str_replace(" ", "-", $nama_gambar));
        $config['upload_path'] = './assets/gambar/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['file_name'] = $seo;
        $config['overwrite'] = true;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data();
            $data = array(
                'nama_gambar' => $nama_gambar,
                'gambar_seo' => $seo,
                'gambar' => $foto['file_name'],
            );
        } else {
            $data = array(
                'nama_gambar' => $nama_gambar,
                'gambar_seo' => $seo,
            );
        }
        $this->crud->update('gambar', $data, 'id_gambar', $id);
        echo "Data Berhasil Disimpan!";
    }

}
