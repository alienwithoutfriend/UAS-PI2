<?php

    class Home_Model extends CI_Model {

        public function Login($table, $data){
			
			return $this->db->get_where($table, $data);

		}

        public function profile()
        {
            $query = "SELECT * FROM tb_profile";
            return $this->db->query($query)->result_array();
        }

        public function pendidikan()
        {
            $query = "SELECT * FROM tb_pendidikan";
            return $this->db->query($query)->result_array();
        }

        public function pengalaman()
        {
            $query = "SELECT * FROM tb_pengalaman";
            return $this->db->query($query)->result_array();
        }

    }

?>