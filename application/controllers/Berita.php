<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_berita');
    }


    public function index()
    {
        $data = array(
            'title' => 'SMAN 1 Padang',
            'title2' => 'Data Berita',
            'berita' => $this->m_berita->lists(),
            'isi' => 'admin/berita/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './foto_berita/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar_berita')) {

                $data = array(
                    'title' => 'SMAN 1 Padang',
                    'title2' => 'Add Data Berita',
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/berita/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'judul_berita'   => $this->input->post('judul_berita'),
                    'slug_berita'   => $this->input->post('slug_berita'),
                    'isi_berita'     => $this->input->post('isi_berita'),
                    'gambar_berita'  => $upload_data['uploads']['file_name']
                );

                $this->m_berita->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan !!!');
                redirect('berita');
            }
        }

        $data = array(
            'title' => 'SMAN 1 Padang',
            'title2' => 'Data Berita',
            'isi' => 'admin/berita/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_berita)
    {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './foto_berita/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar_berita')) {
                $data = array(
                    'title' => 'SMAN 1 Padang',
                    'title2' => 'Add Data Berita',
                    'berita' => $this->m_berita->detail($id_berita),
                    'isi' => 'admin/berita/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Menghapus file foto lama
                $berita = $this->m_berita->detail($id_berita);
                if ($berita->id_berita != "") {
                    unlink('./foto_berita/' . $berita->gambar_berita);
                }
                // END Menghapus file foto lama

                $data = array(
                    'id_berita'     => $id_berita,
                    'judul_berita'  => $this->input->post('judul_berita'),
                    'slug_berita'   => $this->input->post('slug_berita'),
                    'isi_berita'    => $this->input->post('isi_berita'),
                    'gambar_berita' => $upload_data['uploads']['file_name']
                );

                $this->m_berita->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan !!!');
                redirect('berita');
            }

            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './foto_berita/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'id_berita'     => $id_berita,
                'judul_berita'  => $this->input->post('judul_berita'),
                'slug_berita'   => $this->input->post('slug_berita'),
                'isi_berita'    => $this->input->post('isi_berita'),
            );

            $this->m_berita->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan !!!');
            redirect('berita');
        }

        $data = array(
            'title' => 'SMAN 1 Padang',
            'title2' => 'Edit Data Berita',
            'berita' => $this->m_berita->detail($id_berita),
            'isi' => 'admin/berita/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_berita)
    {
        // Menghapus file foto lama
        $berita = $this->m_berita->detail($id_berita);
        if ($berita->id_berita != "") {
            unlink('./foto_berita/' . $berita->gambar_berita);
        }
        // END Menghapus file foto lama

        $data = array('id_berita' => $id_berita,);
        $this->m_berita->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
        redirect('berita');
    }
}
