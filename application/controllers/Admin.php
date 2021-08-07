<?php

    class Admin extends CI_Controller {

        public function ToDashboard()
        {
            $data['allprofil'] = $this->Admin_Model->profile();

            $this->load->view('templates/header', $data);
            $this->load->view('admin/dashboard', $data);
            $this->load->view('templates/footer');
        }
        
        public function create()
        {

        $this->load->view('templates/header');
        $this->load->view('admin/create');
        $this->load->view('templates/footer');

        }

        public function simpanprofil()
	    {
		$data = [
			'nama' =>$this->input->post('nama'),
			'profesi' => $this->input->post('profesi'),
			'alamat' => $this->input->post('alamat')
		];
		$this->db->insert('tb_profile',$data);

 $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Selamat!</strong> Data anda berhasil di Tambahkan.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');

		redirect('admin/ToDashboard');
	    }

        public function ToPendidikan()
        {
            $data['allpendidikan'] = $this->Admin_Model->pendidikan();

            $this->load->view('templates/header', $data);
            $this->load->view('pendidikan/dashboard', $data);
            $this->load->view('templates/footer');
        } 

        public function create1()
        {

        $this->load->view('templates/header');
        $this->load->view('pendidikan/create');
        $this->load->view('templates/footer');

        }

        public function simpanpendidikan()
	    {
		$data = [
			'instansi' =>$this->input->post('inst'),
			'lulus' => $this->input->post('lulus')
		];
		$this->db->insert('tb_pendidikan',$data);

 $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Selamat!</strong> Data anda berhasil di Tambahkan.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');

		redirect('admin/ToPendidikan');
	    }

        public function ToPengalaman()
        {
            $data['allpengalaman'] = $this->Admin_Model->pengalaman();

            $this->load->view('templates/header', $data);
            $this->load->view('pengalaman/dashboard', $data);
            $this->load->view('templates/footer');
        }
        public function create2()
        {

        $this->load->view('templates/header');
        $this->load->view('pengalaman/create');
        $this->load->view('templates/footer');

        }

        public function simpanpengalaman()
	    {
		$data = [
			'perusahaan' =>$this->input->post('nama'),
			'jabatan' => $this->input->post('jabatan'),
            'tahun_mulai' =>$this->input->post('mulai'),
			'tahun_akhir' => $this->input->post('akhir')
		];
		$this->db->insert('tb_pengalaman',$data);

 $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Selamat!</strong> Data anda berhasil di Tambahkan.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');

		redirect('admin/ToPengalaman');
	    }

    }

?>