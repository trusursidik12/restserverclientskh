<?php
use chriskacerguis\RestServer\RestController;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

class Camsispu extends RestController {

    public function __construct()
    {
    	parent::__construct();
    }

	// public function index_post()
	// {
	// 	if($this->cams_m->add_cams_ispu() > 0){
	// 		$this->response([
 //                    'status' 	=> true,
 //                    'data' 		=> 'Data Berhasil Ditambah'
 //                ], 200);
	// 	}else{
	// 		$this->response([
 //                    'status' 	=> false,
 //                    'message' 	=> 'Data Tidak Ditemukan'
 //                ], 404);
	// 	}
	// }

}
