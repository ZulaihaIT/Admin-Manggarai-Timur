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
class Sub extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        // if (!$this->session->has_userdata('nama')) {
        //     redirect('Sign_in');
        // }
    }
    public function index() {
        $data['data'] = $this->crud->select_other('sub', 'join kategori on kategori.id_kategori=sub.id_kategori order by id_sub desc','*,sub.gambar as gambar_sub')->result();
        $data['kategori'] = $this->crud->select('kategori')->result();
        $this->load->view("sub/sub_data", $data);
    }
    public function simpan_sub() {
        $nama_sub = $this->input->post('nama_sub');
        $seo = strtolower(str_replace(" ", "-", $nama_sub));
        $config['upload_path'] = './assets/sub/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['file_name'] = $seo;
        $config['overwrite'] = true;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data();
//             echo $foto['file_name'];
            $data = array(
                'id_kategori' => $this->input->post('kategori'),
                'nama_sub' => $nama_sub,
                'sub_seo' => $seo,
                'gambar' => $foto['file_name'],
                'keterangan' => $this->input->post('keterangan')
            );
        } else {
            $data = array(
                'id_kategori' => $this->input->post('kategori'),
                'nama_sub' => $nama_sub,
                'sub_seo' => $seo,
                'keterangan' => $this->input->post('keterangan')
            );
//            echo $this->upload->display_errors();
        }
        $this->crud->insert('sub', $data);
    }

    function hapus_sub() {
        $id = $this->input->post('id');
        $file = $this->input->post('file');
        // unlink(("./assets/sub/$file"));

        $this->crud->delete('sub', 'id_sub', $id);
        echo "Data Berhasil Dihapus...";
    }

    function select_sub_id($id) {
        $data = $this->crud->select_id('sub', 'id_sub', $id)->row();
        echo json_encode($data);
    }

    function update_sub() {
        $id = $this->input->post("id");
        $file_name = $this->input->post("gambar");

       $nama_sub = $this->input->post('nama_sub');
       $seo = strtolower(str_replace(" ", "-", $nama_sub));
        $config['upload_path'] = './assets/sub/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '1000000';
        $config['file_name'] = $seo;
        $config['overwrite'] = true;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data();
            $data = array(
                'id_kategori' => $this->input->post('kategori'),
                'nama_sub' => $nama_sub,
                'sub_seo' => $seo,
                'gambar' => $foto['file_name'],
                'keterangan' => $this->input->post('keterangan')
            );
        } else {
            $data = array(
                'id_kategori' => $this->input->post('kategori'),
                'nama_sub' => $nama_sub,
                'sub_seo' => $seo,
                'keterangan' => $this->input->post('keterangan')
            );
        }
        $this->crud->update('sub', $data, 'id_sub', $id);
        echo "Data Berhasil Disimpan!";
    }
}
