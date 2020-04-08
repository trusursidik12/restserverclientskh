<?php

class Cams_m extends CI_Model
{

	public function get_cams_data($id = FALSE)
	{
		if($id === FALSE){
			$this->db->select('DISTINCT(waktu), id_stasiun, h2s, cs2, ws, wd, humidity, temperature, pressure, sr, rain_intensity');
			$this->db->group_by('waktu'); 
			$this->db->order_by('waktu', 'DESC');
			$query = $this->db->get('cams_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('cams_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_cams_data_solo_rum($id = FALSE)
	{
		if($id === FALSE){
			$this->db->where('id_stasiun', 'SKH_RUM');
			$this->db->order_by('id', 'DESC');
			$this->db->limit('1');
			$query = $this->db->get('cams_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('cams_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_cams_data_solo_gupit($id = FALSE)
	{
		if($id === FALSE){
			$this->db->where('id_stasiun', 'SKH_GUPIT');
			$this->db->order_by('id', 'DESC');
			$this->db->limit('1');
			$query = $this->db->get('cams_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('cams_data', array('id' => $id));
		return $query->row_array();
	}

	public function get_cams_data_solo_plesan($id = FALSE)
	{
		if($id === FALSE){
			$this->db->where('id_stasiun', 'SKH_PLESAN');
			$this->db->order_by('id', 'DESC');
			$this->db->limit('1');
			$query = $this->db->get('cams_data');
			return $query->result_array();
		}
		$query = $this->db->get_where('cams_data', array('id' => $id));
		return $query->row_array();
	}

	public function add_cams_data()
	{
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'id_stasiun' 		=> $this->input->post('id_stasiun'),
			'waktu' 			=> $this->input->post('waktu'),
			//'waktu' 				=> Date("Y:m:d h:i:s"),
			'h2s' 				=> $this->input->post('h2s'),
			'cs2' 				=> $this->input->post('cs2'),
			'ws' 				=> $this->input->post('ws'),
			'wd' 				=> $this->input->post('wd'),
			'humidity' 			=> $this->input->post('humidity'),
			'temperature' 		=> $this->input->post('temperature'),
			'pressure' 			=> $this->input->post('pressure'),
			'sr' 				=> $this->input->post('sr'),
			'rain_intensity' 	=> $this->input->post('rain_intensity')
		);
		return $this->db->insert('cams_data', $data);
	}

	public function add_cams_data_gupit()
	{
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'id_stasiun' 		=> $this->input->post('id_stasiun'),
			'waktu' 			=> $this->input->post('waktu'),
			//'waktu' 				=> Date("Y:m:d h:i:s"),
			'h2s' 				=> $this->input->post('h2s'),
			'cs2' 				=> $this->input->post('cs2'),
			'ws' 				=> $this->input->post('ws'),
			'wd' 				=> $this->input->post('wd'),
			'humidity' 			=> $this->input->post('humidity'),
			'temperature' 		=> $this->input->post('temperature'),
			'pressure' 			=> $this->input->post('pressure'),
			'sr' 				=> $this->input->post('sr'),
			'rain_intensity' 	=> $this->input->post('rain_intensity')
		);
		return $this->db->insert('cams_data', $data);
	}
}