<?php
use chriskacerguis\RestServer\RestController;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

class Api extends RestController {

    public function __construct()
    {
    	parent::__construct();
    }

	// public function index_get()
	// {

	// 	$id = $this->get('id');

	// 	if ($id === null) {
	// 		$data = $this->cams_m->get_cams_data();
	// 	} else {
	// 		$data = $this->cams_m->get_cams_data($id);
	// 	}

	// 	if ($data) {
	// 		$this->response([
 //                    'status' 	=> true,
 //                    'data' 		=> $data
 //                ], 200);
	// 	} else {
	// 		$this->response([
 //                    'status' 	=> false,
 //                    'message' 	=> 'Data Tidak Ditemukan'
 //                ], 404);
	// 	}
	// }

	public function soloRum_get()
	{

		$id = $this->get('id');

		if ($id === null) {
			$data = $this->cams_m->get_cams_data_solo_rum();
		} else {
			$data = $this->cams_m->get_cams_data_solo_rum($id);			
		}

		if ($data) {
			$this->response([
                    'status' 	=> true,
                    'data' 		=> $data
                ], 200);
		} else {
			$this->response([
                    'status' 	=> false,
                    'message' 	=> 'Data Tidak Ditemukan'
                ], 404);
		}
	}

	public function soloGupit_get()
	{

		$id = $this->get('id');

		if ($id === null) {
			$data = $this->cams_m->get_cams_data_solo_gupit();
		} else {
			$data = $this->cams_m->get_cams_data_solo_gupit($id);			
		}

		if ($data) {
			$this->response([
                    'status' 	=> true,
                    'data' 		=> $data
                ], 200);
		} else {
			$this->response([
                    'status' 	=> false,
                    'message' 	=> 'Data Tidak Ditemukan'
                ], 404);
		}
	}

	public function soloPlesan_get()
	{

		$id = $this->get('id');

		if ($id === null) {
			$data = $this->cams_m->get_cams_data_solo_plesan();
		} else {
			$data = $this->cams_m->get_cams_data_solo_plesan($id);			
		}

		if ($data) {
			$this->response([
                    'status' 	=> true,
                    'data' 		=> $data
                ], 200);
		} else {
			$this->response([
                    'status' 	=> false,
                    'message' 	=> 'Data Tidak Ditemukan'
                ], 404);
		}
	}
}
