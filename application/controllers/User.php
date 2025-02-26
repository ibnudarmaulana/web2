<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

    public function index() {
        // Ambil data dari API
        $api_url = "http://web2.test/api/users";
        $result = $this->get_api_data($api_url);
		$data["users"] = $result['data'];

        // Load view dan kirim data
		return $this->load->view('users/readuser',$data);
    }

    private function get_api_data($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true); // Ubah JSON menjadi array PHP
    }
}

