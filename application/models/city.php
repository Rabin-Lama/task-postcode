<?php
	defined('BASEPATH') OR exit("Error");

	class City extends CI_Model {
		
		public function select_city($postcode) {
			$this->db->where('postcode', $postcode);
			$query = $this->db->get('postcode');
			
			return $query->result();
		}

		public function select_where($postcode) {
			$query = $this->db->group_by('postcode')
						  	  ->like('postcode', $postcode, 'after')
						  	  ->get('postcode');

			return $query->result();
		}
	}